<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    public function index()
    {
        $entries = Entry::all()->sortByDesc('created_at');

        return view('entries.index', ['entries' => $entries]);
    }

    public function create()
    {
        return view('entries.create');
    }
    
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'mood' => 'required',
            'notes' => 'nullable'
        ]);

        Entry::create($attributes);

        return redirect('/entries')->with([
            'status' => 'Entry added!'
        ]);
    }

    public function show(Entry $entry)
    {
        return view('entries.show', ['entry' => $entry]);
    }

    public function edit(Entry $entry)
    {
        return view('entries.edit', ['entry' => $entry]);
    }

    public function update(Request $request, Entry $entry)
    {
        $attributes = $request->validate([
            'mood' => 'required',
            'notes' => 'nullable'
        ]);

        $entry->update($attributes);

        return redirect("/entries/{$entry->id}")->with([
            'status' => 'Entry updated!'
        ]);
    }

    public function destroy(Entry $entry)
    {
        $entry->delete();

        return redirect('/entries')->with([
            'status' => 'Entry deleted!'
        ]);
    }
}
