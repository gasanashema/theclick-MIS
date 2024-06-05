<?php

namespace App\Livewire\Front\Auth;

use Livewire\Component;

class Signup extends Component
{
    public function render()
    {
        return view('livewire.front.auth.signup')->layout('livewire.layouts.front');
    }
}
