<?php

namespace App\Http\Livewire\BookCategories;

use Livewire\Component;

class BookCategoryList extends Component
{
    public $cats;
    public function render()
    {
        return view('livewire.bookCategory.book-category-list');
    }
}
