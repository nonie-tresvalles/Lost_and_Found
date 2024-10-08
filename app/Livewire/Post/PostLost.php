<?php

namespace App\Livewire\Post;

use Livewire\Component;

class PostLost extends Component
{
    #[Layout('components.layouts.post')]
    public function render()
    {
        return view('livewire.post.post-lost');
    }
}
