@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1 class="my-8 text-center text-grey-dark text-sm">Nice to meet you! 🤝</h1>

    <form method="POST" action="{{ route('register') }}" class="flex flex-col justify-center">
        @csrf

        <div class="mb-4">
            <label for="name" class="block font-bold mb-2">Name</label>

            <input 
                id="name" 
                type="name" 
                class="w-full border shadow rounded px-4 py-2 {{ $errors->has('name') ? 'border-red mb-2' : 'border-grey-light' }}" 
                name="name" 
                value="{{ old('name') }}" 
                autofocus
            >

            @if ($errors->has('name'))
                <div role="alert" class="text-red text-sm">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="email" class="block font-bold mb-2">Email address</label>

            <input 
                id="email" 
                type="email" 
                class="w-full border shadow rounded px-4 py-2 {{ $errors->has('email') ? 'border-red mb-2' : 'border-grey-light' }}" 
                name="email" 
                value="{{ old('email') }}" 
                autofocus
            >

            @if ($errors->has('email'))
                <div role="alert" class="text-red text-sm">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="password" class="block font-bold mb-2">Password</label>

            <input 
                id="password" 
                type="password" 
                class="w-full border shadow rounded px-4 py-2 {{ $errors->has('password') ? 'border-red mb-2' : 'border-grey-light' }}" 
                name="password"
            >

            @if ($errors->has('password'))
                <div role="alert" class="text-red text-sm">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="password-confirm" class="block font-bold mb-2">Confirm password</label>

            <input 
                id="password-confirm" 
                type="password" 
                class="w-full border shadow rounded px-4 py-2 {{ $errors->has('password') ? 'border-red' : 'border-grey-light' }}" 
                name="password_confirmation"
            >
        </div>

        <button 
            type="submit"
            class="bg-blue text-white py-2 mb-4 rounded shadow w-full text-center"
        >Sign up</button>

        <div class="text-center text-sm mb-4">
            <span class="text-grey-dark">Already have an account?</span>
            
            <a 
                href="/login"
                class="no-underline text-blue"
            >Sign in</a>
        </div>
    </form>
@endsection
