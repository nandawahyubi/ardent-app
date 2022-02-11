<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('img/logo-navbar.png') }}" />

    <title>Login | Ardent Auto Detailing</title>
</head>

<body>

    <section class="login-user">
        <div class="container-fluid">
            <div class="row">
                <div class="left col">
                    <img src="{{ asset('img/banner-login.png') }}" alt="">
                </div>
                <div class="right col">
                    <div class="content w-75 mb-5">
                        <h2 class="title pb-4 mb-2">Ardent Auto Detailing</h3>
                        <h1 class="header">Start Today</h1>
                        <h6 class="subheader pb-2 mb-1">Because tomorrow become never</h6>
                    </div>
                    <a href="{{ route('user.login.google') }}" class="btn btn-light btn-google shadow w-75 d-flex justify-content-center">
                        <img src="{{ asset('img/ic_google.svg') }}" alt="icon-google" class="icon">
                        <p class="mx-3 mb-0 text-center">Sign In with Google</p>
                    </a>
                    <div class="licensi">
                        Copyright © {{ date('Y') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>