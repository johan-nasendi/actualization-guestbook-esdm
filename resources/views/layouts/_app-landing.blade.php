<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{asset('/assets/img/logos.png')}}" type="image/x-icon">

    <!--=============== REMIX ICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{asset('/assets/css/styles.css')}}">

    <title> @yield('title') </title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        @include('layouts.componenents.navbar')
    </header>

    <main class="main">

    </main>

    @yield('content')
    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        @include('layouts.componenents.footer')
    </footer>

    <!--=============== SCROLL REVEAL ===============-->
    <script src="{{asset('/assets/js/scrollreveal.min.js')}}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    @include('sweetalert::alert')

</body>

</html>
