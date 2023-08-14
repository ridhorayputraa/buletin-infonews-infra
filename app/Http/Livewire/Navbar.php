<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{

    // public $category;

    public function render()
    {
        // $this->category = $category->name;

        return view('livewire.navbar', [
            'categories' => Category::all()
        ]);
    }
}
