@extends('layouts.app')

@section('content')
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Mood</th>
                <th>Notes</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td>{{ $entry->id }}</td>
                    <td>{{ $entry->mood }}</td>
                    <td>{{ $entry->notes }}</td>
                    <td>{{ $entry->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection