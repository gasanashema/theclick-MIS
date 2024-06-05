<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Hosting extends Component
{
    public function render()
    {
        return view('livewire.front.hosting')->layout('livewire.layouts.front');
    }
}
