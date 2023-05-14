<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $title = '';
    public $slug = '';
    public function createCategory()
    {
        Category::create([
            'title' => $this->title,
            'slug' => $this->slug
        ]);
        return $this->redirect('/');
    }
    public function render()
    {
        return view('livewire.create-category');
    }
}
