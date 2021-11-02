<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\User;
use Livewire\Component;

class NewArticle extends Component
{
    public $title;
    public $categories;
    public $category_id;
    public $body;

    public $rules = [
        'title' => 'required',
        'body' => 'required',
        'category_id' => 'required'
    ];

    public function goBack()
    {
        return redirect()->route('dashboard');
    }

    public function save()
    {
        $this->validate();

        $user = User::find(auth()->user()->id);

        $user->articles()->create([
            'title' => $this->title,
            'title_slug' => $this->title,
            'category_id' => $this->category_id,
            'body' => $this->body
        ]);

        $this->goBack();
    }

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.new-article');
    }
}
