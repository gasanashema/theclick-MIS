<?php

namespace App\Livewire\Front\Auth;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.front.auth.login')->layout('livewire.layouts.front');
    }
}
