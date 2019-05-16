@extends('layouts.app')

@section('title', 'Reset password')

@if (session('status'))
    @section('message')
        <div class="-mt-4 -mx-4 bg-purple p-4 text-white text-center">{{ session('status') }}</div>
    @endsection
@endif

@section('content')
    <h1 class="my-8 text-center text-grey-dark text-sm">Forgot your password? 🤔</h1>

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col justify-center">
        @csrf

        <div class="mb-4">
            <label for="email" class="block font-bold mb-2">Email address</label>

            <input 
                id="email" 
                type="email" 
                class="w-full border shadow rounded px-4 py-2 {{ $errors->has('email') ? 'border-red mb-2' : 'border-grey-light' }}" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus
            >

            @if ($errors->has('email'))
                <div role="alert" class="text-red text-sm">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <button 
            type="submit"
            class="bg-blue text-white py-2 mb-4 rounded shadow w-full text-center"
        >Send link</button>
    </form>
@endsection
