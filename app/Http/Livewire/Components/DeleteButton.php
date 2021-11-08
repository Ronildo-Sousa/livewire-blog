<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class DeleteButton extends Component
{
    public function delete()
    {
        return redirect()->route('login');
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.components.delete-button');
    }
}
