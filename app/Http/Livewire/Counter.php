<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $countMinus;

    public function __construct()
    {
        $this->countMinus = $this->count - 1;
    }

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->countMinus--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
