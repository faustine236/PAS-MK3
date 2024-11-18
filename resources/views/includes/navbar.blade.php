<nav class="navbar navbar-dark navbar-expand-lg bg-dark py-3">
    <div class="container">
        <a class="navbar-brand" href="#">Power Shoes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
            </ul>
            <a class="btn btn-outline-light" href="{{ route('booking.check') }}">
                Check Booking
            </a>
        </div>
    </div>
</nav>
