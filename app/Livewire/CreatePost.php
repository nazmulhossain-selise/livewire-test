<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $content;

    public $successMessage = "";



    public $rules = [
        'title' => 'required|min:6',
        'content' => 'required|min:6',
    ];

    public function render()
    {
        return view('livewire.create-post');
    }

    public function save()
    {
        $this->validate();

        $post = new \App\Models\Post();
        $post->title = $this->title;
        $post->content = $this->content;
        $post->author_id = 1;
        $post->save();

        $this->successMessage = "Post successfully created.";
    }

    public function resetForm()
    {
        $this->title = "";
        $this->content = "";
        $this->successMessage = "";
        $this->resetErrorBag();
    }
}
