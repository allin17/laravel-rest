<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Http\Request;

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
