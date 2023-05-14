<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Livewire\Component;

class BooksComponent extends Component
{
    public function deleteBook($id) {
        Book::destroy($id);
    }
    public function render()
    {
        $books = Book::paginate(10);

        return view('livewire.book.books-component', [
            'books' => $books
        ]);
    }
}
