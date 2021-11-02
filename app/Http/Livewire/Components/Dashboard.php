<?php

namespace App\Http\Livewire\Components;

use App\Models\Article;
use Livewire\Component;

class Dashboard extends Component
{
    public $articles;

    public function goToRoute($route)
    {
        return redirect()->route($route);
    }

    public function mount()
    {
        $this->articles = Article::where('user_id', auth()->user()->id)
                                    ->orderBy('created_at', 'desc')
                                    ->get();
    }

    public function render()
    {
        return view('livewire.components.dashboard');
    }
}
