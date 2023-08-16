<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class Postingan extends Component
{



    public function render()
    {
        return view('livewire.postingan', [
            'news' => News::all()
        ]);
    }
}
