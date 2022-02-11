<!DOCTYPE html>
<html lang="en" id="awal">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('datepicker/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('fancybox/css/jquery.fancybox.min.css') }}" />
    <link rel="shortcut icon" href="{{ asset('img/logo-navbar.png') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <title>Ardent Auto Detailing</title>
</head>

<body>
    @include('components.navbar')

    @include('sweetalert::alert')

    @yield('content')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fancybox/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('datepicker/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/fancybox.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="{{ asset('js/datepicker.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>

</body>

</html>