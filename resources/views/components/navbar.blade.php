<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
                {{-- <x-nav-link :href="route('about')" :active="request()->routeIs('about')">About</x-nav-link>
                <x-nav-link href="/contact" :active="request()->routeIs('contact')">Contact</x-nav-link> --}}
                <x-nav-link href="/posts" :active="request()->routeIs('posts.*')">Posts</x-nav-link>

            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-primary">Logout</button>
                    </form>
                @else
                    <x-nav-link href="/login">Login</x-nav-link>

                @endauth
            </ul>
        </div>
    </div>
</nav>
