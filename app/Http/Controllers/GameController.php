<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::where('user_id', Auth::id())->get();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'platform' => 'required|string|max:100',
            'release_year' => 'required|integer|min:1950|max:' . (date('Y') + 5),
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('games', 'public');
        }

        $request->user()->games()->create($validated);

        return redirect()->route('games.index')->with('success', 'Game added successfully!');
    }

    public function edit(Game $game)
    {
        if ($game->user_id !== Auth::id()) abort(403);
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        if ($game->user_id !== Auth::id()) abort(403);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'platform' => 'required|string|max:100',
            'release_year' => 'required|integer|min:1950|max:' . (date('Y') + 5),
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($game->image) {
                Storage::disk('public')->delete($game->image);
            }
            $validated['image'] = $request->file('image')->store('games', 'public');
        }

        $game->update($validated);

        return redirect()->route('games.index')->with('success', 'Game updated successfully!');
    }

    public function destroy(Game $game)
    {
        if ($game->user_id !== Auth::id()) abort(403);

        if ($game->image) {
            Storage::disk('public')->delete($game->image);
        }
        $game->delete();

        return redirect()->route('games.index')->with('success', 'Game deleted successfully!');
    }
}
