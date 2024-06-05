<?php

namespace App\Livewire\Front;

use Livewire\Component;

class Domain extends Component
{
    public function render()
    {
        return view('livewire.front.domain')->layout('livewire.layouts.front');
    }
}
