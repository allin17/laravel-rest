<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Livewire\Component;

class CreateBook extends Component
{
    public $title = '';
    public $slug = '';
    public $description = '';
    public $author = '';
    public $cover = '';
    public $rating = 0;

    public function createBook()
    {
        Book::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'author' => $this->author,
            'cover' => $this->cover,
            'rating' => $this->rating
        ]);
        return redirect('/')->with('message', 'Book created!');
    }

    public function render()
    {
        return view('livewire.book.create-book');
    }
}
