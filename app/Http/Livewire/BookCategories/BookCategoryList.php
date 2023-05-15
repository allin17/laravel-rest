<?php

namespace App\Http\Livewire\BookCategories;

use App\Models\Category;
use Livewire\Component;

class BookCategoryList extends Component
{
    public function deleteCategory($id)
    {
        Category::destroy($id);
        return $this->redirect('/');
    }
    public $cats;
    public function render()
    {
        return view('livewire.bookCategory.book-category-list');
    }
}
