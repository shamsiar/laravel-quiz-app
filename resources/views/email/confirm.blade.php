<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | UNICMINDS </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/um/favicon-UnicMinds.png') }}" type="image/x-icon" />

    {{-- <link rel="apple-touch-icon" href="{{ asset('frontend/img/apple-touch-icon.png') }}"> --}}

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">

</head>

<body>

    <div class="limiter">

        <div class="container-login100">

            <div class="bg-light p-5 rounded">
                <h1>Dashboard</h1>

                @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    A fresh verification link has been sent to your email address.
                </div>
                @endif

                Before proceeding, please check your email for a verification link. If you did not receive the email,
                <form action="{{ route('verification.send') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="d-inline btn btn-link p-0">
                        click here to request another
                    </button>.
                </form>
            </div>

        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
