{{-- @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif --}}

@if (flash()->message)
    <div class="alert d-flex align-items-center alert-{{ flash()->class ?? 'success' }}" role="alert">

        @if (flash()->class === 'success')
            <i class="bi bi-check-circle-fill me-2"></i>
        @endif
        @if (flash()->class === 'danger' || flash()->class === 'warning')
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
        @endif
        @if (flash()->class === 'info')
            <i class="bi bi-info-circle-fill me-2"></i>
        @endif
        {{ flash()->message }}
    </div>
@endif
