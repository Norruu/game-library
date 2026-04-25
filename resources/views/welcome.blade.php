<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PixelVault - Game Library</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#0b0f19] text-gray-200 font-sans min-h-screen flex flex-col selection:bg-purple-500 selection:text-white">

    <!-- Top Navigation -->
    <nav class="w-full border-b border-gray-800 bg-gray-900/50 backdrop-blur-md fixed top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <svg class="w-10 h-10 text-cyan-400 drop-shadow-[0_0_10px_rgba(6,182,212,0.8)]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 22V12M12 12L3 7M12 12l9-5M7 10.5v3M5.5 12h3" />
                    <circle cx="16.5" cy="11.5" r="0.5" fill="currentColor" />
                    <circle cx="18.5" cy="13.5" r="0.5" fill="currentColor" />
                </svg>
                <span class="font-black text-2xl tracking-widest uppercase text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">
                    PixelVault
                </span>
            </div>

            <div class="space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-sm font-bold text-white bg-purple-600 hover:bg-purple-500 px-5 py-2.5 rounded-lg uppercase tracking-wider transition shadow-[0_0_15px_rgba(168,85,247,0.4)]">Go to Hub</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-bold text-gray-300 hover:text-cyan-400 uppercase tracking-wider transition">Login</a>
                    <a href="{{ route('register') }}" class="text-sm font-bold text-white bg-cyan-600 hover:bg-cyan-500 px-5 py-2.5 rounded-lg uppercase tracking-wider transition shadow-[0_0_15px_rgba(6,182,212,0.4)] ml-4">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="flex-grow flex items-center justify-center pt-20 relative overflow-hidden">
        <!-- Glowing Orbs -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 rounded-full bg-purple-600 opacity-20 blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 rounded-full bg-cyan-600 opacity-20 blur-[120px] pointer-events-none"></div>

        <div class="max-w-5xl mx-auto px-6 text-center relative z-10 py-20">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gray-800 border border-gray-700 text-sm font-bold text-gray-400 uppercase tracking-widest mb-8">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                System Online v1.0
            </div>

            <h1 class="text-6xl md:text-8xl font-black text-white uppercase tracking-tighter mb-6 drop-shadow-2xl">
                Level Up Your <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-400">Game Library</span>
            </h1>

            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto leading-relaxed">
                The ultimate database to archive, manage, and showcase your entire video game collection. Engineered for gamers, built with precision.
            </p>

            @guest
                <a href="{{ route('register') }}" class="inline-block bg-gradient-to-r from-purple-600 to-cyan-600 hover:from-purple-500 hover:to-cyan-500 text-white font-black text-lg py-4 px-10 rounded-lg shadow-[0_0_30px_rgba(168,85,247,0.5)] hover:scale-105 transition-all uppercase tracking-widest">
                    Initialize Setup
                </a>
            @endguest
        </div>
    </main>

    <footer class="border-t border-gray-800 py-8 text-center text-gray-600 text-sm font-bold uppercase tracking-widest bg-gray-900/50 relative z-10">
        &copy; {{ date('Y') }} PixelVault Database. All rights reserved.
    </footer>
</body>
</html>
