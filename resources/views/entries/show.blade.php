@extends('layouts.app')

@section('title', "View entry")

@if (session('status'))
    @section('message')
        <div class="mb-4 -mt-4 -mx-4 bg-purple p-4 text-white text-center">{{ session('status') }}</div>
    @endsection
@endif

@section('content')
    <div class="flex justify-between mb-8">
        <a 
            href="/entries/{{ $entry->id }}/edit"
            class="text-blue border border-blue py-2 px-4 mb-2 rounded shadow float-right no-underline bg-transparent hover:bg-blue hover:text-white"
        >Edit entry</a>

        <form action="/entries/{{ $entry->id }}" method="POST">
            @method('DELETE')
            @csrf

            <button 
                type="submit"
                class="text-red border border-red py-2 px-4 mb-2 rounded shadow float-right no-underline bg-transparent hover:bg-red hover:text-white"
            >Delete entry</button>
        </form>
    </div>

    <h3>{{ $entry->emoji }}</h3>
    <h4>{{ $entry->created_at->format('D, j M') }}</h4>
    <p>{{ $entry->notes }}</p>
@endsection