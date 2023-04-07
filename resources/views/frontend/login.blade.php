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

            <div class="my-3 text-center header-logo">

                <img src="{{ asset('frontend/img/um/Logo-UnicMinds.png') }}" alt="LOGO" class="img-thumbnail img-fluid">
            </div>

            <div class="wrap-login100">

                <div class="login100-pic p-5">
                    <span class="login100-form-title">
                        Free Certificate Exams for Kids
                    </span>

                    <div>
                        <ul>
                            <li>Sign-up/Sign-in (on the right ->)</li>
                            <li>Choose a programming language you want to test yourself in and take the test.</li>

                            <li>Students can validate their skills and obtain a certificate to stand out.</li>

                            <li>The certificate is awarded only to the students who score more than 70 Percent.</li>
                            <li>Explore our <a href="https://unicminds.com/" style="color: #f27507;">coding classes for kids and teenagers</a>.</li>


                        </ul>

                    </div>

                </div>

                <form action="{{ route('login.post') }}" method="post" class="login100-form validate-form p-5 gradient-custom-2">
                    @csrf
                    <span class="login100-form-title">
                        Welcome Back ! <br>
                        Sign in to continue . . .
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center pt-4">
                        <span class="txt1">
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Password?
                        </a>
                    </div>

                    <div class="text-center pt-4">
                        <a class="txt2" href="{{ route('register') }}" style="font-size: 16px; font-family: Poppins-Bold;">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
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
