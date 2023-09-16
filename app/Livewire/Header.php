<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $time = 'Hello World!';
    public function render()
    {
        return view('livewire.header');
    }
}
