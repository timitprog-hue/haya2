<!DOCTYPE html>
<html lang="id" data-theme="dark" data-lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'Haya Dev')</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    {{-- CSS + JS utama dari Vite (hasil build di public/build) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-body text-light">

<header class="main-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark navbar-glass">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#home">
                <img src="{{ asset('images/logo.svg') }}" width="34" height="34" alt="Haya Dev Logo" />
                <span class="lang-id">Haya Dev</span>
                <span class="lang-en">Haya Dev</span>
            </a>

            <button class="navbar-toggler border-0" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-2">
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll active" href="#home" data-target="home">
                            <span class="lang-id">Beranda</span>
                            <span class="lang-en">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll" href="#about" data-target="about">
                            <span class="lang-id">Tentang</span>
                            <span class="lang-en">About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll" href="#services" data-target="services">
                            <span class="lang-id">Layanan</span>
                            <span class="lang-en">Services</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll" href="#portfolio" data-target="portfolio">
                            <span class="lang-id">Portofolio</span>
                            <span class="lang-en">Portfolio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll" href="#contact" data-target="contact">
                            <span class="lang-id">Kontak</span>
                            <span class="lang-en">Contact</span>
                        </a>
                    </li>
                </ul>

                <div class="d-flex align-items-center gap-2 ms-lg-3 mt-3 mt-lg-0">

                    {{-- Language toggle --}}
                    <div class="btn-group btn-group-sm me-1" role="group" aria-label="Language toggle">
                        <button type="button"
                                class="btn btn-outline-light lang-toggle-btn active"
                                data-lang="id">
                            ID
                        </button>
                        <button type="button"
                                class="btn btn-outline-light lang-toggle-btn"
                                data-lang="en">
                            EN
                        </button>
                    </div>

                    {{-- Theme toggle --}}
                    <button id="themeToggle" type="button" class="btn btn-sm btn-outline-light rounded-pill px-3">
                        <span id="themeToggleIcon">🌙</span>
                        <span id="themeToggleText" class="ms-1">Dark</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="page-background"></div>

<div class="page-wrapper">
    <main role="main" class="flex-shrink-0">
        @yield('content')
    </main>

    <footer class="footer-glass mt-auto py-3">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <span class="text-muted small">
                <span class="lang-id">
                    © {{ date('Y') }} Haya Dev — Website, Aplikasi & Otomasi Industri
                </span>
                <span class="lang-en">
                    © {{ date('Y') }} Haya Dev — Websites, Apps & Industrial Automation
                </span>
            </span>
            <span class="text-muted small">
                <span class="lang-id">Dibangun dengan Laravel</span>
                <span class="lang-en">Built with Laravel</span>
            </span>
        </div>
    </footer>
</div>

{{-- JS tambahan di luar bundle Vite (kalau memang dipakai) --}}
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/site.js') }}"></script>

{{-- Stack untuk script per-halaman --}}
@stack('scripts')

</body>
</html>
