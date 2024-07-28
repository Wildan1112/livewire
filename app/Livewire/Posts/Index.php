<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Title;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

#[Lazy]

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;

    #[On('postCreated')]

    public function updateList($post)
    {
    }

    public function placeholder()
    {
        return view('livewire.posts.loading');
    }
    public function render()
    {
        return view('livewire.posts.index', [
            // 'posts' => Post::query()->with('user')->latest()->get()
            'posts' => Post::with('user')->latest()->paginate(5)
        ]);
    }
}
