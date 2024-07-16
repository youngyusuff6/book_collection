<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function create()
    {
        return view('books.create');
    }
    public function show($id)
    {
        $book = Book::findOrFail($id);
        $bookTitle = $book->pluck('title')->first();
        return view('books.show', ['id' => $id, 'book' => $bookTitle]);
    }

    public function edit($id)
    {
        return view('books.edit', ['id' => $id]);
    }
}
