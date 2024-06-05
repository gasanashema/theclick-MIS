<?php

namespace App\Livewire\Front;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.front.about-us')->layout('livewire.layouts.front');
    }
}
