<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.front.contact')->layout('livewire.layouts.front');
    }
}
