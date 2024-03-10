<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $posts;

    public function render()
    {
        return view('livewire.home');
    }
}
