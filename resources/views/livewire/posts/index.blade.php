<div class="row">
    <div>
        @foreach ($posts as $post)
            <livewire:posts.block :post="$post" wire:key="{{ $post->id }}" />
        @endforeach
    </div>

    {{ $posts->links() }}
</div>
