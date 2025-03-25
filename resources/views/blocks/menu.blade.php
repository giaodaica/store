<nav class="navbar navbar-expand-lg navbar-landing navbar-light fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/virals-logo-black.png') }}" class="card-logo card-logo-dark" alt="logo dark" height="17">
            <img src="{{ asset('assets/images/virals-logo.png') }}" class="card-logo card-logo-light" alt="logo light" height="17">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        @yield('menu')

    </div>
</nav>
    <div class="bg-overlay bg-overlay-pattern"></div>
