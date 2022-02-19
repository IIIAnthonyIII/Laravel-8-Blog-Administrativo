<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $categoriesNav = Category::all();
        return view('livewire.navigation', compact('categoriesNav'));
    }
}