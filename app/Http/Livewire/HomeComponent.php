<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $cats = Category::all();
        return view('livewire.home-component', [
            'cats' => $cats
        ]);
    }
}
