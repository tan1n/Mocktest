<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    <link href="{{asset('user/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('user/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('user/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('user/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <link href="{{asset('user/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('user/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('user/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('user/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('user/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('user/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('user/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('user/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('user/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('user/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('user/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('user/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('user/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('user/vendor/select2/select2.min.js')}}">
    </script>
    <!-- Main JS-->
    <script src="{{asset('user/js/main.js')}}"></script>
</body>

</html>
<!-- end document-->
