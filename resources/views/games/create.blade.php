<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-2xl text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400 tracking-wider uppercase drop-shadow-md">
            {{ __('New Database Entry') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#0b0f19] min-h-screen text-gray-200 flex items-center justify-center">
        <div class="max-w-3xl w-full mx-auto sm:px-6 lg:px-8">

            <div class="bg-gray-800/80 backdrop-blur-md p-8 rounded-2xl shadow-[0_0_40px_rgba(0,0,0,0.5)] border border-gray-700 relative overflow-hidden">
                <!-- Decorative background glow -->
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 rounded-full bg-purple-600 opacity-10 blur-3xl pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-48 h-48 rounded-full bg-cyan-600 opacity-10 blur-3xl pointer-events-none"></div>

                <div class="flex items-center space-x-4 mb-8">
                    <div class="h-10 w-2 bg-gradient-to-b from-purple-500 to-cyan-500 rounded-full"></div>
                    <h2 class="text-3xl font-black text-white uppercase tracking-wide">Add <span class="text-cyan-400">New Game</span></h2>
                </div>

                <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 relative z-10">
                    @csrf

                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Game Title</label>
                        <input type="text" name="title" value="{{ old('title') }}" required
                            class="block w-full bg-gray-900 border-gray-700 rounded-lg text-white placeholder-gray-500 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-shadow">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Genre</label>
                            <input type="text" name="genre" value="{{ old('genre') }}" required
                                class="block w-full bg-gray-900 border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-shadow">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Platform</label>
                            <input type="text" name="platform" value="{{ old('platform') }}" required
                                class="block w-full bg-gray-900 border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-cyan-500 focus:border-cyan-500 transition-shadow">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Release Year</label>
                        <input type="number" name="release_year" value="{{ old('release_year', date('Y')) }}" required
                            class="block w-full bg-gray-900 border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-shadow">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Description / Notes</label>
                        <textarea name="description" rows="4"
                            class="block w-full bg-gray-900 border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-shadow resize-none">{{ old('description') }}</textarea>
                    </div>

                    <div class="bg-gray-900/50 p-4 rounded-xl border border-gray-700">
                        <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Cover Image Module</label>

                        <div class="flex-grow">
                            <p class="text-sm text-gray-500 mb-2">Upload a cover image for your library grid.</p>
                            <input type="file" name="image" accept="image/*"
                                class="block w-full text-sm text-gray-400
                                file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0
                                file:text-sm file:font-bold file:bg-gray-700 file:text-white
                                hover:file:bg-cyan-600 hover:file:cursor-pointer transition-all">
                        </div>
                    </div>

                    <div class="flex items-center justify-end space-x-4 pt-6 mt-6 border-t border-gray-700">
                        <a href="{{ route('games.index') }}" class="text-gray-400 hover:text-white font-bold px-6 py-2 transition-colors uppercase text-sm tracking-wider">Abort</a>

                        <button type="submit" class="bg-gradient-to-r from-purple-600 to-cyan-600 hover:from-purple-500 hover:to-cyan-500 text-white font-bold py-3 px-8 rounded-lg shadow-[0_0_15px_rgba(168,85,247,0.4)] transition-all uppercase tracking-widest text-sm hover:scale-105">
                            Initialize Game
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
