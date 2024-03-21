<?php

namespace App\Livewire\Post;

use LivewireUI\Modal\ModalComponent;

class Create extends ModalComponent
{
    public $media = [];

    public $description;
    public $location;
    public $hide_like_view;
    public $allow_commenting;

    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public function render()
    {
        return view('livewire.post.create');
    }
}
