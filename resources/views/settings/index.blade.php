@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <div class="flex justify-between mb-8">
        <ul class="w-screen -mx-4">
            <li class="px-4">
                <form method="POST" action="/logout">
                    @csrf

                    <button 
                        type="submit"
                        class="text-blue"
                    >Logout</button>
                </form>
            </li>
        </ul>
    </div>
@endsection