<?php

namespace App\Livewire\Front;

use Livewire\Component;

class WebApps extends Component
{
    public function render()
    {
        return view('livewire.front.web-apps')->layout('livewire.layouts.front');
    }
}
