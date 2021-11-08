<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class EmptyComponent extends Component
{
    public string $message = '';

    public function render()
    {
        return view('livewire.components.empty-component');
    }
}
