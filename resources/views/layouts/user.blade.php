<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Title Page-->
<title>Dashboard</title>

</head>

<body class="animsition">
<div class="page-wrapper">

@include('users.menu')




<div class="page-content--bgf7">


@yield('content')

</div>


<!-- Main JS-->
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>