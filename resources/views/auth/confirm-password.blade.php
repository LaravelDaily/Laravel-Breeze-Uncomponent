@extends('layouts.guest')

@section('content')
    <div class="mb-4 text-sm text-gray-600">
        This is a secure area of the application. Please confirm your password before continuing.
    </div>

    @include('partials.auth-validation-errors')

    <form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <!-- Password -->
        <div>
            <x-label for="password" :value="__('Password')"/>

            <x-input id="password" class="block mt-1 w-full"
                     type="password"
                     name="password"
                     required autocomplete="current-password"/>
        </div>

        <div class="flex justify-end mt-4">
            <x-button>
                {{ __('Confirm') }}
            </x-button>
        </div>
    </form>
@endsection
