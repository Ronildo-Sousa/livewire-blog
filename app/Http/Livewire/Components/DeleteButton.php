<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class DeleteButton extends Component
{
    public string $type = 'article';
    public $data;


    public function delete()
    {
        $this->data->delete();
        $this->emit('deleted');
    }

    public function render()
    {
        return view('livewire.components.delete-button');
    }
}
