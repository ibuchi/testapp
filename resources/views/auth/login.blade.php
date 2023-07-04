@extends('layouts.app')

@section('content')
<div class="w-full h-screen flex items-center">
    <div class="bg-gray-200 p-8 rounded-lg lg:w-1/3 mx-auto shadow-md">
        <x-notification />
        <form method="POST" action="{{ route('auth.login') }}">
            @csrf
            <x-input-error :messages="$errors->all()" class="mt-2" />

            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full p-2" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>

            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full p-2" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <x-my-button class="mt-4 bg-yellow-500 hover:bg-yellow-600">
                {{ __('Login') }}
            </x-my-button>
            <span>Don't have an account? <a class="font-bold" href="{{ route('register') }}">Register</a></span>
        </form>
    </div>
</div>
@endsection
