<?php

namespace App\Livewire\Post;

use Livewire\Component;

class PostFound extends Component
{
    #[Layout('components.layouts.post')]
    public function render()
    {
        return view('livewire.post.post-found');
    }
}
