<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CategoryShow extends Component
{
    public $slug;
    public $category;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->category = Category::where('slug', $this->slug)->first();
    }

    public function render()
    {
        return view('livewire.category-show')
            ->layout('layouts.app');
    }
}
