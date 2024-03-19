<?php

namespace App\Livewire\Post;

use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
