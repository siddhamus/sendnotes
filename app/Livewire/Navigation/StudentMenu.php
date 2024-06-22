<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StudentMenu extends Component
{

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect('/');
    }


    public function render()
    {
        return view('livewire.navigation.student-menu');
    }
}
