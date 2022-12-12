<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/dist/img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('loginn') }}/css/style.css">
</head>

<body class="img js-fullheight" style="background-image: url({{ asset('search/images/background.png') }});">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Silahkan Login</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @error('error')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <form action="{{ route('login') }}" method="POST" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email" name="email"
                                    value="{{ old('email') }}" required>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" name="password"
                                    placeholder="Password" value="{{ old('password') }}" required>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Ingat Saya
                                        <input type="checkbox" name="remember" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{ route('register') }}" style="color: #fff">Lupa Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-success submit px-3">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('loginn') }}/js/jquery.min.js"></script>
    <script src="{{ asset('loginn') }}/js/popper.js"></script>
    <script src="{{ asset('loginn') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('loginn') }}/js/main.js"></script>
</body>

</html>
