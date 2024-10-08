<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserAboutUs extends Component
{
    #[Layout('components.layouts.user')]
    public function render()
    {
        return view('livewire.user.user-about-us');
    }
}
