<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public function getRegisterForm()
    {
        return redirect()->to('/register');
    }

    public function getLoginForm()
    {
        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.components.navbar');
    }
}
