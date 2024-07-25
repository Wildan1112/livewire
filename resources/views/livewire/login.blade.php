<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>

            <form wire:submit="login">
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model="form.email">
                    @error('form.email')
                        <small class="text-danger mt-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" wire:model="form.password">
                    @error('form.password')
                        <small class="text-danger mt-1">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
