<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BooksIndex extends Component
{
    public $books;

    public function mount()
    {
        $this->books = Book::all();
    }

    public function delete($id)
    {
        Book::findOrFail($id)->delete();
        $this->books = Book::all();
    }

    public function render()
    {
        return view('livewire.books-index');
    }
}
