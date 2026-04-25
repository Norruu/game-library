<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="text-2xl font-black text-white uppercase tracking-widest mb-6 text-center border-b border-gray-700 pb-4">System Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-400" />
        </div>

        <!-- Password -->
        <div class="mt-6">
            <x-input-label for="password" :value="__('Security Key (Password)')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-400" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-6">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded bg-gray-900 border-gray-700 text-purple-600 focus:ring-purple-500" name="remember">
                <span class="ms-2 text-sm text-gray-400 uppercase tracking-wider font-bold">{{ __('Keep Session Active') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-700">
            @if (Route::has('password.request'))
                <a class="text-sm font-bold uppercase tracking-widest" href="{{ route('password.request') }}">
                    {{ __('Lost Key?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 shadow-[0_0_15px_rgba(168,85,247,0.4)]">
                {{ __('Authenticate') }}
            </x-primary-button>
        </div>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-500 uppercase tracking-wider font-bold">New user? <a href="{{ route('register') }}">Create an account</a></p>
        </div>
    </form>
</x-guest-layout>
