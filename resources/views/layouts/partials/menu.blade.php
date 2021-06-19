<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <h1><a href="index.html"><span>OuagaSania</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="index.html"><img src="assets/img/logo/logo.png" alt="" class="img-fluid"></a> --}}
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                <li><a class="nav-link scrollto" href="#about">A propos</a></li>
                <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Sensibilisation</a></li>
                        <li><a href="#">Alerte</a></li>
                        <li><a href="#">Forum</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link scrollto" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                    </li>
                @endif
            @endguest
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
