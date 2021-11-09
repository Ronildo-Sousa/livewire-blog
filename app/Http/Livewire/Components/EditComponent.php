<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;


class EditComponent extends Component
{
    public $type = 'article';
    public $data;
    public $name;
    public $title;
    public $body;

    public function save()
    {
        if ($this->type === 'category') {
            $this->validate(['name' => 'required']);

            $this->data->name = $this->name;
            $this->data->save();

            return redirect()->route('dashboard');
        }
        $this->validate(['title' => 'required', 'body' => 'required']);

        $this->data->title = $this->title;
        $this->data->body = $this->body;
        $this->data->save();

        return redirect()->route('dashboard');
    }

    public function mount()
    {
        $this->name = $this->data->name;
        $this->title = $this->data->title;
        $this->body = $this->data->body;
    }

    public function render()
    {
        return view('livewire.components.edit-component');
    }
}
