<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

# Controllers group related logic.
# example: use Book::all() to fetch data and Book::create() to save data using Laravel's Request validation

class BookController extends Controller
{
    // GET /api/books
    public function index()
    {
        return Book::all();
    }

    // POST /api/books
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        $book = Book::create($validated);
        return response()->json($book, 201);
    }
}
