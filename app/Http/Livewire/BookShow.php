<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookShow extends Component
{
    public $book;

    public function mount($id)
    {
        $this->book = Book::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.book-show');
    }
}