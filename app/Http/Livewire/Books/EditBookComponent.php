<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;


class EditBookComponent extends Component
{
    use WithFileUploads;

    public $title = '';
    public $slug = '';
    public $description = '';
    public $author = '';
    public $cover;
    public $rating = 1;
    public $category = 1;
    public $bookId;

    public function mount($id)
    {
        $this->bookId = $id;
    }

    public function updateBook()
    {
        $coverPath = $this->cover->store('public/covers');
        Book::where('id', $this->bookId)->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'author' => $this->author,
            'cover' => $coverPath,
            'rating' => $this->rating,
            'category_id' => $this->category
        ]);
        return redirect('/')->with('message', 'Book updated');
    }
    public function render()
    {
        $book = Book::findOrFail($this->bookId);
        $title = $book->title;
        return view('livewire.book.edit-book-component', [
            'book' => $book,
            'title' => $title
        ]);
    }
}
