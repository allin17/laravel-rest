<?php

namespace App\Http\Livewire\Components;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function deleteCategory($id)
    {
        Category::destroy($id);
    }

    public function render()
    {
        $cats = Category::all();
        $user = Auth::user();

        return view('livewire.home-component', [
            'cats' => $cats,
            'user' => $user
        ]);
    }
}
