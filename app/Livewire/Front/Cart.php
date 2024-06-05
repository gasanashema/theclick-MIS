<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Cart extends Component
{
    public function render()
    {
        return view('livewire.front.cart')->layout('livewire.layouts.front');
    }
}
