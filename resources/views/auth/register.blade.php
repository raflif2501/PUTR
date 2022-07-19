<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('user') }}/img/icon.png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('loginn') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('loginn') }}/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('loginn') }}/css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title p-b-26">
                        Buat Akun
                    </span>
                    <span class="login100-form-title p-b-48">
                        <img src="{{ asset('user') }}/img/pemkab.png" alt="PUTR" height="100" width="100">
                    </span>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="name" id="name">
                        <span class="focus-input100" data-placeholder="Nama Lengkap"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                            id="email">
                        <span class="focus-input100" data-placeholder="Email"></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" id="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="submit">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-center p-t-115">
                    <span class="txt1">
                        Sudah Punya Akun ?
                    </span>

                    <a class="txt2" href="{{ route('login') }}">
                        Login
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('loginn') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('loginn') }}/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('loginn') }}/vendor/bootstrap/js/popper.js"></script>
    <script src="{{ asset('loginn') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('loginn') }}/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('loginn') }}/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{ asset('loginn') }}/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('loginn') }}/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('loginn') }}/js/main.js"></script>

</body>

</html>
