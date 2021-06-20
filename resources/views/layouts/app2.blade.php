<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <!-- meta links -->
     @include('layouts.backend.partials.meta')

     <title>{{ config('app.namee', 'OuagaSania|Admin') }}</title>

     <!-- Favicons -->
    <link href="{{ asset('assets/img/logo/logo.ico') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

     <!-- Vendor CSS Files -->
     @include('layouts.backend.partials.css')
      {{-- fichiers css  --}}
      @stack('styles')
</head>
<body>
    @include('layouts.backend.partials.preloader')
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!-- Menu  -->
        @include('layouts.backend.partials.nav_dash1')
        @include('layouts.backend.partials.chatbox')
        @include('layouts.backend.partials.nav_dash')
        @include('layouts.backend.partials.sidebare')
        <main class="content-body">
            <!-- Contenu de la page -->
            @yield('content')
            @include('layouts.backend.partials.add_centre_modal')
        </main>
        @include('layouts.backend.partials.footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!-- Js files -->
    @include('layouts.backend.partials.js_files')
    {{-- scripts --}}
    @stack('scripts')
</body>

</html>
