<x-app-layout>
    <!-- Custom overrides to force the dark gaming theme on default Breeze forms -->
    <style>
        .profile-section h2 { font-weight: 900 !important; text-transform: uppercase; letter-spacing: 0.05em; }
        .profile-info h2 { color: #22d3ee !important; } /* Cyan */
        .profile-pass h2 { color: #c084fc !important; } /* Purple */
        .profile-del h2 { color: #f87171 !important; } /* Red */

        .profile-section p { color: #9ca3af !important; }
        .profile-section label { color: #9ca3af !important; font-weight: 700 !important; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.75rem; }

        .profile-section input { background-color: #111827 !important; border-color: #374151 !important; color: white !important; border-radius: 0.5rem !important; box-shadow: none !important; }
        .profile-section input:focus { border-color: #22d3ee !important; outline: none !important; box-shadow: 0 0 0 2px rgba(34, 211, 238, 0.3) !important; }

        /* Gradient Buttons */
        .profile-info button { background: linear-gradient(to right, #0891b2, #2563eb) !important; color: white !important; font-weight: 800 !important; text-transform: uppercase !important; letter-spacing: 0.1em !important; border: none !important; transition: all 0.3s; }
        .profile-pass button { background: linear-gradient(to right, #9333ea, #db2777) !important; color: white !important; font-weight: 800 !important; text-transform: uppercase !important; letter-spacing: 0.1em !important; border: none !important; transition: all 0.3s; }
        .profile-del button { background: #ef4444 !important; color: white !important; font-weight: 800 !important; text-transform: uppercase !important; letter-spacing: 0.1em !important; border: none !important; transition: all 0.3s; }

        .profile-section button:hover { transform: scale(1.05); }
        .profile-section p.text-sm.text-gray-600 { color: #10b981 !important; font-weight: bold; text-transform: uppercase; letter-spacing: 0.1em; } /* "Saved" success text */
    </style>

    <div class="py-12 bg-[#0b0f19] min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Update Profile Info Module -->
            <div class="profile-section profile-info p-6 sm:p-8 bg-gray-800/80 backdrop-blur-md shadow-[0_0_30px_rgba(6,182,212,0.1)] border border-cyan-500/30 sm:rounded-2xl relative overflow-hidden group hover:border-cyan-500/60 transition-colors">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-cyan-500 shadow-[0_0_15px_rgba(6,182,212,1)]"></div>
                <div class="max-w-xl relative z-10">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Module -->
            <div class="profile-section profile-pass p-6 sm:p-8 bg-gray-800/80 backdrop-blur-md shadow-[0_0_30px_rgba(168,85,247,0.1)] border border-purple-500/30 sm:rounded-2xl relative overflow-hidden group hover:border-purple-500/60 transition-colors">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-purple-500 shadow-[0_0_15px_rgba(168,85,247,1)]"></div>
                <div class="max-w-xl relative z-10">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Module -->
            <div class="profile-section profile-del p-6 sm:p-8 bg-gray-800/80 backdrop-blur-md shadow-[0_0_30px_rgba(239,68,68,0.1)] border border-red-500/30 sm:rounded-2xl relative overflow-hidden group hover:border-red-500/60 transition-colors">
                <div class="absolute top-0 left-0 w-1.5 h-full bg-red-500 shadow-[0_0_15px_rgba(239,68,68,1)]"></div>
                <div class="max-w-xl relative z-10">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
