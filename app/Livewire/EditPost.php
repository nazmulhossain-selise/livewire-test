<?php

namespace App\Livewire;

use Livewire\Component;

class EditPost extends Component
{
    public $title;
    public $content;

    public $post;

    public $successMessage = "";

    public $rules = [
        'title' => 'required|min:6',
        'content' => 'required|min:6',
    ];

    public function mount($post)
    {
        $this->title = $post->title;
        $this->content = $post->content;
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.edit-post');
    }

    public function save()
    {
        $this->validate();

        $this->post->title = $this->title;
        $this->post->content = $this->content;
        $this->post->save();

        $this->successMessage = "Post successfully updated.";
    }

    public function resetForm()
    {
        $this->title = "";
        $this->content = "";
        $this->successMessage = "";
        $this->resetErrorBag();
    }
}
