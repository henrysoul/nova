{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   </head>
<body>
    @include('includes.header')
   
    <div class="rotating-text">
        <p>Nova Tracking is</p>
        <p>
          <span class="word alizarin">groundbreaking.</span>
          <span class="word wisteria">beautiful.</span>
          <span class="word peter-river">game changing.</span>
          <span class="word emerald">different.</span>
          <span class="word sun-flower">special.</span>
        </p>
    </div>
    <div class="login">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @include('includes.alerts')
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required autocomplete="current-password"  placeholder="Enter your password">
            
            <button type="submit">Login</button>
        </form>
        <a class="signup" href="{{ route('register') }}">Don't have an account? Sign up here</a>
        <a class="signup" href="{{ route('password.request') }}">Forgot password</a>

    </div>    
    <script src="/landing/script.js"></script>
    </body>
</html>
