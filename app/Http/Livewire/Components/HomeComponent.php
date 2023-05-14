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
        return $this->redirect('/');
    }

    public function render()
    {
        $cats = Category::all();
        $user = Auth::user();

        return view('livewire.components.home-component', [
            'cats' => $cats,
            'user' => $user
        ]);
    }
}
