<?php

namespace App\Http\Livewire\Components;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $openDropdown;

    public function getRegisterForm()
    {
        return redirect()->route('register');
    }

    public function getLoginForm()
    {
        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function toggleDropdown()
    {
        $this->openDropdown = !$this->openDropdown;
    }

    public function mount()
    {
        $this->openDropdown = false;
    }
    public function render()
    {
        return view('livewire.components.navbar');
    }
}
