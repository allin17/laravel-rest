<?php

namespace App\Http\Livewire\BookCategories;

use App\Models\Category;
use Livewire\Component;

class CreateBookCategory extends Component
{
    public $title = '';
    public $slug = '';
    public function createCategory()
    {
        Category::create([
            'title' => $this->title,
            'slug' => $this->slug
        ]);
        return redirect('/')->with('message', 'Category created!');
    }
    public function render()
    {
        return view('livewire.bookCategory.create-book-category')->extends('layouts.auth');
    }
}
