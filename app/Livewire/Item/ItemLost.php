<?php

namespace App\Livewire\Item;

use Livewire\Component;

class ItemLost extends Component
{
    #[Layout('components.layouts.item')]
    public function render()
    {
        return view('livewire.item.item-lost');
    }
}
