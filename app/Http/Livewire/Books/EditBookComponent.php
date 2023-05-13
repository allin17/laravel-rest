<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Illuminate\Http\Request;
use Livewire\Component;


class EditBookComponent extends Component
{
    public function render(Request $req)
    {
        $book = Book::findOrFail($req->id);
        $title = $book->title;
        return view('livewire.edit-book-component', [
            'book' => $book,
            'title' => $title
        ]);
    }
}
