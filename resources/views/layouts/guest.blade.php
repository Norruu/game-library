<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PixelVault') }} - Access</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Force Dark Theme on default Breeze components */
        body { background-color: #0b0f19; color: #e5e7eb; }
        label { color: #9ca3af !important; font-weight: 700 !important; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem; }
        input[type="text"], input[type="email"], input[type="password"] {
            background-color: #111827 !important; border-color: #374151 !important; color: white !important; border-radius: 0.5rem !important; box-shadow: none !important; width: 100%;
        }
        input:focus { border-color: #22d3ee !important; outline: none !important; box-shadow: 0 0 0 2px rgba(34, 211, 238, 0.3) !important; }
        a { color: #22d3ee !important; transition: color 0.2s; }
        a:hover { color: #c084fc !important; }
        button.bg-gray-800 {
            background: linear-gradient(to right, #9333ea, #0891b2) !important; color: white !important; font-weight: 800 !important; text-transform: uppercase !important; letter-spacing: 0.1em !important; border: none !important; transition: all 0.3s;
        }
        button.bg-gray-800:hover { transform: scale(1.05); shadow: 0 0 15px rgba(168,85,247,0.5); }
    </style>
</head>
<body class="font-sans text-gray-200 antialiased relative overflow-hidden min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

    <!-- Background Glow -->
    <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-cyan-600 opacity-10 blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 rounded-full bg-purple-600 opacity-10 blur-[100px] pointer-events-none"></div>

    <div class="relative z-10 text-center mb-6">
        <a href="/" class="flex flex-col items-center gap-4 group">
            <svg class="w-16 h-16 text-cyan-400 group-hover:text-purple-400 transition-colors drop-shadow-[0_0_15px_rgba(6,182,212,0.8)]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 22V12M12 12L3 7M12 12l9-5M7 10.5v3M5.5 12h3" />
                <circle cx="16.5" cy="11.5" r="0.5" fill="currentColor" />
                <circle cx="18.5" cy="13.5" r="0.5" fill="currentColor" />
            </svg>
            <span class="font-black text-3xl tracking-widest uppercase text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">
                PixelVault
            </span>
        </a>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-8 py-10 bg-gray-800/80 backdrop-blur-md shadow-[0_0_40px_rgba(0,0,0,0.5)] border border-purple-500/30 overflow-hidden sm:rounded-2xl relative z-10">
        {{ $slot }}
    </div>
</body>
</html>
