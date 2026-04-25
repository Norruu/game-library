<x-app-layout>
    <div class="py-12 bg-[#0b0f19] min-h-screen text-gray-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Top Action Bar -->
            <div class="mb-8 flex justify-between items-center bg-gray-900/50 p-4 rounded-xl border border-gray-800 backdrop-blur-sm">
                <div>
                    <h3 class="text-xl font-bold text-gray-300">My Collection</h3>
                    <p class="text-sm text-gray-500">{{ $games->count() }} Games found</p>
                </div>
                <a href="{{ route('games.create') }}" class="relative inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-white transition-all duration-200 bg-gradient-to-r from-purple-600 to-cyan-600 font-pj rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 hover:shadow-[0_0_20px_rgba(168,85,247,0.5)] hover:scale-105 uppercase tracking-widest">
                    + Add New Game
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-500/20 border border-green-500 text-green-400 p-4 rounded-lg mb-6 shadow-[0_0_15px_rgba(34,197,94,0.2)]">
                    <span class="font-bold">Mission Accomplished:</span> {{ session('success') }}
                </div>
            @endif

            <!-- Game Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($games as $game)
                    <div class="group relative bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-purple-500 hover:shadow-[0_0_25px_rgba(168,85,247,0.4)] transition-all duration-300 flex flex-col h-full">

                        <!-- Image Container -->
                        <div class="relative h-56 overflow-hidden">
                            @if($game->image)
                                <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->title }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110 group-hover:opacity-80">
                            @else
                                <div class="w-full h-full bg-gray-900 flex items-center justify-center text-gray-600 border-b border-gray-700">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                            @endif
                            <!-- Overlay Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent"></div>

                            <!-- Badges -->
                            <div class="absolute bottom-3 left-3 flex gap-2">
                                <span class="px-2 py-1 bg-purple-600/80 text-white text-xs font-bold uppercase rounded backdrop-blur-sm border border-purple-400/50">{{ $game->platform }}</span>
                                <span class="px-2 py-1 bg-cyan-600/80 text-white text-xs font-bold uppercase rounded backdrop-blur-sm border border-cyan-400/50">{{ $game->release_year }}</span>
                            </div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-5 flex flex-col flex-grow">
                            <h3 class="font-black text-xl text-white mb-1 group-hover:text-purple-400 transition-colors">{{ $game->title }}</h3>
                            <p class="text-xs text-cyan-400 font-bold uppercase tracking-wider mb-3">{{ $game->genre }}</p>

                            <p class="text-sm text-gray-400 line-clamp-3 flex-grow">{{ $game->description }}</p>

                            <!-- Actions -->
                            <div class="mt-6 pt-4 border-t border-gray-700 flex justify-between items-center">
                                <a href="{{ route('games.edit', $game) }}" class="flex-1 text-center py-2 text-sm font-bold text-gray-300 hover:text-white bg-gray-700/50 hover:bg-purple-600/50 rounded-l-lg transition-colors border-r border-gray-800">
                                    EDIT
                                </a>
                                <form action="{{ route('games.destroy', $game) }}" method="POST" class="flex-1 flex" onsubmit="return confirm('Are you sure you want to delete this game permanently?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full text-center py-2 text-sm font-bold text-red-400 hover:text-white bg-gray-700/50 hover:bg-red-600/80 rounded-r-lg transition-colors">
                                        DELETE
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full flex flex-col items-center justify-center py-20 bg-gray-800/50 rounded-2xl border border-gray-700 border-dashed">
                        <div class="text-6xl mb-4">🎮</div>
                        <h3 class="text-2xl font-bold text-gray-400 mb-2">No games in your library yet</h3>
                        <p class="text-gray-500 mb-6">Time to start building your ultimate collection.</p>
                        <a href="{{ route('games.create') }}" class="text-purple-400 hover:text-purple-300 font-bold underline decoration-purple-500/50 underline-offset-4">Add your first game</a>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
