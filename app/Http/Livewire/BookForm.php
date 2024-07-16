<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookForm extends Component
{
        public $title;
        public $author;
        public $description;
        public $published_year;
        public $bookId;
    
        protected $rules = [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required',
            'published_year' => 'required|integer',
        ];
    
        public function mount($id = null)
        {
            if ($id) {
                $book = Book::findOrFail($id);
                $this->bookId = $book->id;
                $this->title = $book->title;
                $this->author = $book->author;
                $this->description = $book->description;
                $this->published_year = $book->published_year;
            }
        }
    
        public function save()
        {
            $this->validate();
    
            if ($this->bookId) {
                $book = Book::findOrFail($this->bookId);
                $book->update([
                    'title' => $this->title,
                    'author' => $this->author,
                    'description' => $this->description,
                    'published_year' => $this->published_year,
                ]);
            } else {
                Book::create([
                    'title' => $this->title,
                    'author' => $this->author,
                    'description' => $this->description,
                    'published_year' => $this->published_year,
                ]);
            }
    
            return redirect()->to('/books');
        }
    
        public function render()
        {
            return view('livewire.book-form');
        }
}
