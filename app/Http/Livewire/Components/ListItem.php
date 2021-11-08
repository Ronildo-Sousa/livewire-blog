<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Str;

class ListItem extends Component
{
    public string $type;
    public $data;

    public function edit()
    {
        return redirect()->route('login');
    }

    public function mount()
    {
        $this->data->body = Str::words($this->data->body, 6, '...');
        $this->data->title = Str::words($this->data->title, 5, '...');
    }

    public function render()
    {
        return view('livewire.components.list-item');
    }
}
