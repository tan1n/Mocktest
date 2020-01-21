<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title Page-->
<title>Dashboard</title>
<link
    rel="stylesheet"
    type="text/css"
    media="screen"
    href="{{asset('css/bootstrap.min.css')}}"

/>

<link
            rel="stylesheet"
            type="text/css"
            media="screen"
            href="{{asset('css/my_custom_css.css')}}"
        />
        <link
        rel="stylesheet"
        type="text/css"
        media="screen"
        href="{{asset('css/my_custom.css')}}"
    />


</head>

<body class="animsition">
<div class="page-wrapper">

@include('users.menu')




<div class="">


@yield('content')

</div>


<!-- Main JS-->
<script src="{{asset('js/app.js')}}"></script>
<script src="https://kit.fontawesome.com/f4d8879ff1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</body>

</html>