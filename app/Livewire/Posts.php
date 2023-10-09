<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts;

    public function mount($posts)
    {
        $this->posts = $posts;
    }
    
    public function render()
    {
        return view('livewire.posts', [
            'posts' => $this->posts,
        ]);
    }
}
