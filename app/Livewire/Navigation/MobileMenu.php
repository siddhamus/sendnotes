<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class MobileMenu extends Component
{

    public $isOpen = false;

    public function toggleMenu()
    {
        $this->isOpen = !$this->isOpen;
    }

    
    public function render()
    {
        return view('livewire.navigation.mobile-menu');
    }
}
