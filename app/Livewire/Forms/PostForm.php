<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    // #[Rule(['required', 'string', 'min:3'])]
    // public string $title = '';

    #[Rule(['required'])]
    public string $body = '';

    public function store()
    {

        $validated = $this->validate();

        $post = Auth::user()->posts()->create($validated);

        // session()->flash('message', 'Post created successfully!');
        flash('Post created successfully!', 'success');

        $this->reset();

        return $post;
    }
}
