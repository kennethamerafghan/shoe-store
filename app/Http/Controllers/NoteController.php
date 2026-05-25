<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // READ (Display Notes)
    public function index()
    {
        $notes = Note::latest()->get();
        return view('notes.index', compact('notes'));
    }

    // SHOW FORM
    public function create()
    {
        return view('notes.create');
    }

    // CREATE (Save Note)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Note::create($request->all());

        return redirect()->route('notes.index')
                         ->with('success', 'Note added successfully!');
    }
}