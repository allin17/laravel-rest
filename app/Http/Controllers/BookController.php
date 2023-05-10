<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Livewire\Component;

class BookController extends Controller
{
    public function __invoke() {
        $books = Book::all();
        return view('livewire.books-component', [
            'books' => $books
        ]);
    }
}
