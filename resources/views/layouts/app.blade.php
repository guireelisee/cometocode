<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
     <!-- meta links -->
     @include('layouts.partials.meta')

     <title>{{ config('app.namee', 'OuagaSania | Plateforme de gestion de CCT') }}</title>


     <!-- Favicons -->
     <link href="{{ asset('assets/img/logo/logo.ico" rel="icon') }}">
     <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

     <!-- Vendor CSS Files -->
     @include('layouts.partials.css_files')

     <!-- =======================================================
         * Template Name: Bootslander - v4.3.0
         * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
</head>
<body>
    <div>
        <!-- Menu  -->
        @include('layouts.partials.menu')
        <main>
            <!-- Contenu de la page -->
            @yield('content')
        </main>
        @include('layouts.partials.footer')
    </div>

    <!-- Js files -->
    @include('layouts.partials.js_files')
</body>

</html>
