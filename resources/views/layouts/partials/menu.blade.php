<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="row logo">
            <div class="col-2">
                <a href="index.html"><img src="assets/img/logo/logo_modele.png" alt="" class="img-fluid" width=100%></a>
            </div>
            <div class="col-10">
                <h1><a href="index.html"><span style="margin-left: -5%">OuagaSania</span></a></h1>

            </div>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                <li><a class="nav-link scrollto" href="#about">A propos</a></li>
                <li><a class="nav-link scrollto" href="#avantage">Avantages</a></li>
                <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link scrollto" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif --}}
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>
</header><!-- End Header -->
