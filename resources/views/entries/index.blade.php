@extends('layouts.app')

@section('title', 'Entries')

@if (session('status'))
    @section('message')
        <div class="mb-4 -mt-4 -mx-4 bg-purple p-4 text-white text-center">{{ session('status') }}</div>
    @endsection
@endif

@section('content')
    <div class="flex justify-between mb-8">
        <h5 class="text-grey-dark">{{ $entries->count() }} <span class="font-normal">entries</span></h5>

        <a 
            href="/entries/create" 
            class="text-blue border border-blue py-2 px-4 mb-2 rounded shadow float-right no-underline bg-transparent hover:bg-blue hover:text-white"
        >Add entry</a>
    </div>

    @if ($entries->count() == 0)
        <div class="text-center">You don't have any entries yet!</div>
    @else
        <table class="table-fixed w-screen -mx-4">
            <thead>
                <tr class="border-b border-grey pb-4">
                    <th class="pb-4 pl-4 text-left">Mood</th>
                    <th class="pb-4">Notes</th>
                    <th class="pb-4 pr-4 text-right">Date</th>
                </tr>
            </thead>

            <tbody>
                @foreach($entries as $entry)
                    <tr class="border-b border-grey-light">
                        <td class="py-4 pl-4">{{ $entry->emoji }}</td>
                        <td class="py-4 truncate">
                            <a href="/entries/{{ $entry->id }}" class="no-underline text-blue">{{ $entry->notes ?? 'No notes' }}</a>
                        </td>
                        <td class="py-4 pr-4 text-right">{{ $entry->created_at->format('D, j M') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection