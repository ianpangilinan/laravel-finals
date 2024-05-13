<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">
            Login to Your Account
        </h5>
        <p class="text-center small">
            Enter your username & password to login
        </p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation">
        @csrf

        <!-- Email Address -->
        <div class="col-12">
            <x-input-label for="email" :value="__('Email')" class="form-label" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                class="form-control" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
        </div>

        <!-- Password -->
        <div class="col-12">
            <x-input-label for="password" :value="__('Password')" class="form-label" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" class="form-control" name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" id="remember_me" type="checkbox" name="remember" value="true" />
                <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
            </div>
        </div>

        <div class="col-12">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <div class="col-12">
            <x-primary-button class="btn btn-primary w-100">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>