<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BooksComponent extends Component
{
    public function render()
    {
        $books = Book::paginate(10);
        return view('livewire.books-component', [
            'books' => $books
        ]);
    }
}
