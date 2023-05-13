<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;

class EditBookCategory extends Component
{
    public function render(Request $req)
    {
        $cat = Category::findOrFail($req->id);
        return view('livewire.edit-book-category', [
            'cat' => $cat
        ]);
    }
}
