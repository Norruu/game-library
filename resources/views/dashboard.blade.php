<x-app-layout>

    <div class="py-12 bg-[#0b0f19] min-h-screen text-gray-200">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Banner -->
            <div class="bg-gray-800/80 backdrop-blur-md overflow-hidden shadow-[0_0_40px_rgba(0,0,0,0.5)] sm:rounded-2xl border border-gray-700 relative mb-8">
                <!-- Glowing Accents -->
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 rounded-full bg-purple-600 opacity-20 blur-3xl pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-64 h-64 rounded-full bg-cyan-600 opacity-20 blur-3xl pointer-events-none"></div>

                <div class="p-10 relative z-10">
                    <h1 class="text-4xl md:text-5xl font-black text-white uppercase tracking-widest mb-4">
                        Welcome to <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">PixelVault</span>
                    </h1>
                    <p class="text-gray-400 text-lg max-w-3xl leading-relaxed">
                        Your ultimate personal video game archiving system. PixelVault allows you to catalog, organize, and track your entire gaming collection in one sleek, high-tech interface. Never lose track of what you own, what you've played, or what you love.
                    </p>
                </div>
            </div>

            <!-- Navigation Explanation Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- The Hub Explanation -->
                <div class="bg-gray-900/50 border border-cyan-500/30 rounded-2xl p-8 relative overflow-hidden group">
                    <div class="absolute top-0 left-0 w-1 h-full bg-cyan-500"></div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="p-3 bg-cyan-500/20 rounded-lg text-cyan-400">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </div>
                        <h2 class="text-2xl font-black text-white uppercase tracking-wider">The Hub <span class="text-sm font-normal text-cyan-500 lowercase ml-2">(You are here)</span></h2>
                    </div>
                    <p class="text-gray-400 mb-4 line-clamp-3">
                        The Hub is your main command center. It serves as your welcome screen and starting point whenever you log in. In the future, this space will be used to display your gaming statistics, achievements, and collection analytics.
                    </p>
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 text-xs font-bold border border-cyan-500/20 uppercase tracking-widest">
                        Status: Online
                    </div>
                </div>

                <!-- My Games Explanation -->
                <div class="bg-gray-900/50 border border-purple-500/30 rounded-2xl p-8 relative overflow-hidden group hover:border-purple-500/60 transition-colors">
                    <div class="absolute top-0 left-0 w-1 h-full bg-purple-500"></div>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="p-3 bg-purple-500/20 rounded-lg text-purple-400">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                        </div>
                        <h2 class="text-2xl font-black text-white uppercase tracking-wider">My Games</h2>
                    </div>
                    <p class="text-gray-400 mb-6">
                        This is your actual database inventory. Head over to "My Games" to create new game entries, upload cover art, edit existing records, or delete games you no longer own. This is where the real work happens.
                    </p>
                    <a href="{{ route('games.index') }}" class="inline-flex items-center gap-2 px-6 py-2.5 text-sm font-bold text-white transition-all duration-200 bg-purple-600 rounded-lg hover:bg-purple-500 hover:shadow-[0_0_15px_rgba(168,85,247,0.5)] uppercase tracking-widest w-fit">
                        Access Database
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
