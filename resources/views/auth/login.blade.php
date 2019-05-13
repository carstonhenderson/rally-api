@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1 class="my-8 text-center text-grey-dark text-sm">Nice to see you! 👋</h1>

    <form method="POST" action="{{ route('login') }}" class="flex flex-col justify-center">
        @csrf

        <div>
            <label for="email" class="block font-bold mb-2">Email address</label>

            <input 
                id="email" 
                type="email" 
                class="w-full border shadow rounded mb-4 px-4 py-2 {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus
            >

            @if ($errors->has('email'))
                <span role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div>
            <label for="password" class="block font-bold mb-2">Password</label>

            <input 
                id="password" 
                type="password" 
                class="w-full border shadow rounded mb-4 px-4 py-2 {{ $errors->has('password') ? 'is-invalid' : '' }}" 
                name="password" 
                required
            >

            @if ($errors->has('password'))
                <span role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="flex justify-between mb-4 text-sm">
            <input 
                type="checkbox" 
                name="remember" 
                class="mr-2"
                id="remember" {{ old('remember') ? 'checked' : '' }}
            >

            <label for="remember">Remember me</label>

            @if (Route::has('password.request'))
                <a 
                    href="{{ route('password.request') }}"
                    class="flex-1 text-right no-underline text-blue"
                >Forgot your password?</a>
            @endif
        </div>

        <div>
            <button 
                type="submit"
                class="bg-blue text-white py-2 mb-4 rounded shadow w-full text-center"
            >Login</button>
        </div>

        <div class="text-center text-sm">
            <span class="text-grey-dark">Don't have an account?</span>
            
            <a 
                href="/register"
                class="no-underline text-blue"
            >Sign up</a>
        </div>

    </form>
@endsection
