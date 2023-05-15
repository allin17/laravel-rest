<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $user = Auth::user();
        return view('livewire.components.navigation', [
            'user' => $user
        ]);
    }
}
