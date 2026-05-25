<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\NoteController;

// Default route (you can choose where to go first)
Route::get('/', function () {
    return redirect()->route('shoes.index'); 
    // or change to notes.index if you want notes as homepage
});

// Shoe CRUD (FULL CRUD)
Route::resource('shoes', ShoeController::class);

// Notes (CREATE + READ ONLY)
Route::resource('notes', NoteController::class)->only([
    'index',
    'create',
    'store'
]);