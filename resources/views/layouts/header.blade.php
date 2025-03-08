<div class="light" id="preloader"></div>

{{-- Mobile Header --}}
{{-- <header class="mobile-header-1 light">
    <div class="container">
        <div class="menu-icon d-inline-flex me-4">
            <button>
                <span></span>
                <span class="visually-hidden">
                    Hamburger menu button for mobile
                </span>
            </button>
        </div>
    </div>
</header> --}}

{{-- Desktop Header --}}
<header class="desktop-header-1 light d-flex align-items-start flex-column">
    <div class="site-logo" style="padding-left: 1.5rem">
        <a class="text-decoration-none" href="/">
            <img width="75" height="75" src="{{ asset('assets/images/logos/main-black-symbol.png') }}" alt="Kantanya logo">
        </a>
    </div>

    {{-- Sidebar --}}
    <nav>
        <ul class="vertical-menu scrollspy">
            <li class="active">
                <a href="#home"><i class="text-dark"></i>Home</a>
            </li>
            <li>
                <a href="#about"><i class="text-dark"></i>About</a>
            </li>
            <li>
                <a href="#experiences"><i class="text-dark"></i>Experiences</a>
            </li>
            <li>
                <a href="#projects"><i class="text-dark"></i>Projects</a>
            </li>
            <li>
                <a href="#contact"><i class="text-dark"></i>Contact</a>
            </li>
        </ul>
    </nav>

    {{-- Footer --}}
    <div class="footer">
        <span class="copyright">©<span id="year"></span> Kantanya Developer.</span>
    </div>
</header>
