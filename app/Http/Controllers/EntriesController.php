<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    public function index()
    {
        $entries = Entry::all();

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

        return redirect('/entries');
    }

    public function show(Entry $entry)
    {
        //
    }

    public function edit(Entry $entry)
    {
        //
    }

    public function update(Request $request, Entry $entry)
    {
        //
    }

    public function destroy(Entry $entry)
    {
        //
    }
}
