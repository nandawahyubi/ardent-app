<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

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
                    <div class="one">
                        <h2 class="title pb-4">Ardent Auto Detailing</h3>
                            <h1 class="header">Start Today</h1>
                            <h6 class="subheader">Because tomorrow become never</h6>
                    </div>
                    <a class="btn btn-light" href="{{ route('user.login.google') }}">
                        <img src="{{ asset('img/ic_google.svg') }}" class="icon" alt=""> Sign In with Google
                    </a>
                    <div class="licensi">
                        Created By Nanda
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>