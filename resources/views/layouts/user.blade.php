<!DOCTYPE html>
    <html lang="en">

    <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/navbar.css')}}"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}"/>
    @section('css')@show
    </head>

    <body>


    <div class="container">
        @include('users.menu')

        @yield('content')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://kit.fontawesome.com/f4d8879ff1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    </body>

    <script>
        function logout()
        {
            var form=document.getElementById('logout');
            form.submit();
        }

    </script>

</html>