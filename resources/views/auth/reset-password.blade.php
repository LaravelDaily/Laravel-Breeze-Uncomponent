@extends('layouts.guest')

@section('content')

    @include('partials.auth-validation-errors')

    <form method="POST" action="{{ route('password.update') }}">
    @csrf

    <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')"/>

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password" class="block font-medium text-sm text-gray-700">
                {{ __('Password') }}
            </label>

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-700">
                {{ __('Confirm Password') }}
            </label>

            <x-input id="password_confirmation" class="block mt-1 w-full"
                     type="password"
                     name="password_confirmation" required/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button>
                {{ __('Reset Password') }}
            </x-button>
        </div>
    </form>
@endsection
