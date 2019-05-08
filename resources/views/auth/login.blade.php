@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email address</label>

            <input 
                id="email" 
                type="email" 
                class="{{ $errors->has('email') ? 'is-invalid' : '' }}" 
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
            <label for="password">Password</label>

            <input 
                id="password" 
                type="password" 
                class="{{ $errors->has('password') ? 'is-invalid' : '' }}" 
                name="password" 
                required
            >

            @if ($errors->has('password'))
                <span role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div>
            <input 
                type="checkbox" 
                name="remember" 
                id="remember" {{ old('remember') ? 'checked' : '' }}
            >
            
            <label for="remember">Remember Me</label>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>

        <div>
            @if (Route::has('password.request'))
                <a 
                    href="{{ route('password.request') }}"
                >Forgot Your Password?</a>
            @endif
        </div>
    </form>
@endsection
