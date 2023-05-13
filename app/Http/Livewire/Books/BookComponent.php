<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Illuminate\Http\Request;
use Livewire\Component;

class BookComponent extends Component
{
    public function render(Request $req)
    {
        $book = Book::findOrFail($req->id);
        return view('livewire.book-component' , [
            'book' => $book
        ]);
    }
}
