<?php

namespace App\Http\Livewire\Components;

use App\Models\Category;
use Livewire\Component;

class NewCategory extends Component
{
    public $name;

    public $rules = ['name' => 'required'];

    public function goBack()
    {
        return redirect()->route('dashboard');
    }

    public function save()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'slug' => $this->name
        ]);

        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.components.new-category');
    }
}
