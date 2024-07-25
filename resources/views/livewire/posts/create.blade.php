<div>
    {{-- Flash message --}}
    <x-flash-message />

    <form wire:submit="save">

        <div class="mb-2">
            <label for="body" class="visually-hidden">Body</label>
            <textarea wire:model="form.body" class="form-control" placeholder="What do you think ?"></textarea>

            @error('form.body')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <div class="d-flex justify-content-end">
        </div>
    </form>

</div>
