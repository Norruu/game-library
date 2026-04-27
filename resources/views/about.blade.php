<x-app-layout>

    <div class="py-12 bg-[#0b0f19] min-h-screen text-gray-200 relative overflow-hidden">

        <!-- Decorative Background Glows -->
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 rounded-full bg-purple-600 opacity-20 blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 rounded-full bg-cyan-600 opacity-20 blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative z-10">

            <!-- Hero Section -->
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <div class="inline-flex items-center justify-center p-3 bg-gray-800/80 rounded-full border border-gray-700 mb-6 shadow-[0_0_15px_rgba(168,85,247,0.3)]">
                    <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h1 class="text-5xl font-black text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500 uppercase tracking-widest mb-4">
                    The Dev Guild
                </h1>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Meet the party members who engineered the <span class="text-cyan-400 font-bold">PixelVault</span> infrastructure. We combined Laravel architecture with cutting-edge UI design to build the ultimate gamer's database.
                </p>
            </div>

            <!-- Team Roster Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                <!-- Player 1: Lead Dev -->
                <div class="bg-gray-800/60 backdrop-blur-sm border border-purple-500/30 rounded-2xl p-6 relative overflow-hidden group hover:border-purple-400 transition-all duration-500 hover:shadow-[0_0_30px_rgba(168,85,247,0.3)] hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-600/20 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>

                    <div class="flex items-center justify-center mb-6 relative">
                        <div class="w-24 h-24 rounded-full bg-gray-900 border-4 border-purple-500 flex items-center justify-center shadow-[0_0_15px_rgba(168,85,247,0.5)] z-10">
                            <span class="text-3xl">🧙‍♂️</span>
                        </div>
                    </div>

                    <div class="text-center relative z-10">
                        <span class="text-xs font-black text-purple-400 uppercase tracking-widest mb-1 block">Player 1</span>
                        <h3 class="text-2xl font-black text-white uppercase tracking-wide mb-1">Merck Daven Jusos</h3>
                        <p class="text-gray-400 text-sm mb-4">Lead Programmer</p>
                    </div>
                </div>

                <!-- Player 2: Frontend -->
                <div class="bg-gray-800/60 backdrop-blur-sm border border-cyan-500/30 rounded-2xl p-6 relative overflow-hidden group hover:border-cyan-400 transition-all duration-500 hover:shadow-[0_0_30px_rgba(6,182,212,0.3)] hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-600/20 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>

                    <div class="flex items-center justify-center mb-6 relative">
                        <div class="w-24 h-24 rounded-full bg-gray-900 border-4 border-cyan-500 flex items-center justify-center shadow-[0_0_15px_rgba(6,182,212,0.5)] z-10">
                            <span class="text-3xl">🥷</span>
                        </div>
                    </div>

                    <div class="text-center relative z-10">
                        <span class="text-xs font-black text-cyan-400 uppercase tracking-widest mb-1 block">Player 2</span>
                        <h3 class="text-2xl font-black text-white uppercase tracking-wide mb-1">Angel Mae Bandola</h3>
                        <p class="text-gray-400 text-sm mb-4">UI/UX Designer / Frontend Ninja</p>
                    </div>
                </div>

                <!-- Player 3: Database -->
                <div class="bg-gray-800/60 backdrop-blur-sm border border-blue-500/30 rounded-2xl p-6 relative overflow-hidden group hover:border-blue-400 transition-all duration-500 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600/20 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>

                    <div class="flex items-center justify-center mb-6 relative">
                        <div class="w-24 h-24 rounded-full bg-gray-900 border-4 border-blue-500 flex items-center justify-center shadow-[0_0_15px_rgba(59,130,246,0.5)] z-10">
                            <span class="text-3xl">🛡️</span>
                        </div>
                    </div>

                    <div class="text-center relative z-10">
                        <span class="text-xs font-black text-blue-400 uppercase tracking-widest mb-1 block">Player 3</span>
                        <h3 class="text-2xl font-black text-white uppercase tracking-wide mb-1">Russel Mae Guisinga</h3>
                        <p class="text-gray-400 text-sm mb-4">Data Architect / Security Tank</p>
                    </div>
                </div>

                <!-- Player 4: Database -->
                <div class="bg-gray-800/60 backdrop-blur-sm border border-blue-500/30 rounded-2xl p-6 relative overflow-hidden group hover:border-blue-400 transition-all duration-500 hover:shadow-[0_0_30px_rgba(59,130,246,0.3)] hover:-translate-y-2">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-600/20 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>

                    <div class="flex items-center justify-center mb-6 relative">
                        <div class="w-24 h-24 rounded-full bg-gray-900 border-4 border-blue-500 flex items-center justify-center shadow-[0_0_15px_rgba(59,130,246,0.5)] z-10">
                            <span class="text-3xl">🛡️</span>
                        </div>
                    </div>

                    <div class="text-center relative z-10">
                        <span class="text-xs font-black text-blue-400 uppercase tracking-widest mb-1 block">Player 3</span>
                        <h3 class="text-2xl font-black text-white uppercase tracking-wide mb-1">Russel Mae Guisinga</h3>
                        <p class="text-gray-400 text-sm mb-4">Data Architect / Security Tank</p>
                    </div>
                </div>

            </div>

            <!-- Version Status / Footer Info -->
            <div class="mt-16 text-center border-t border-gray-800 pt-8">
                <div class="inline-block bg-gray-900 border border-gray-700 rounded-lg px-6 py-3">
                    <p class="text-gray-500 text-sm font-bold uppercase tracking-widest">
                        System Version: <span class="text-cyan-400">1.0.0</span> | Built with Laravel 11
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
