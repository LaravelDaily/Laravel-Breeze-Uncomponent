@extends('layouts.guest')

@section('content')

    @include('partials.auth-session-status')

    @include('partials.auth-validation-errors')

    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')"/>

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')"/>

            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="current-password"/>
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button class="ml-3">
                {{ __('Login') }}
            </x-button>
        </div>
    </form>
@endsection
