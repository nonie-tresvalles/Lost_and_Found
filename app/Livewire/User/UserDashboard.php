<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserDashboard extends Component
{
    #[Layout('components.layouts.user')]
    public function render()
    {
        return view('livewire.user.user-dashboard');
    }
}
