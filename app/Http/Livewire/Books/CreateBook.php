<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBook extends Component
{
    use WithFileUploads;

    public $title = 'saa';
    public $slug = 'sasa';
    public $description = 'sasasasaasas';
    public $author = 'sasa';
    public $cover;
    public $rating = 1;
    public $category = 1;

    public function createBook()
    {
        $coverPath = $this->cover->store('public/covers');
        Book::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'author' => $this->author,
            'cover' => $coverPath,
            'rating' => $this->rating,
            'category_id' => $this->category
        ]);
        return redirect('/')->with('message', 'Book created!');
    }

    public function render()
    {
        return view('livewire.book.create-book');
    }
}
