@extends('layouts.guest')

@section('content')

    @include('partials.auth-validation-errors')

    <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')"/>

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus/>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')"/>

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" required/>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')"/>

            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="new-password"/>
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')"/>

            <x-input id="password_confirmation" class="block mt-1 w-full"
                     type="password"
                     name="password_confirmation" required/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-button>
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
@endsection
