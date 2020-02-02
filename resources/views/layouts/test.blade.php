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
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/chapter.css')}}"/>
    @section('css')@show
</head>

<body>


<div class="container">
    @include('users.menu')

    <h2 id="timer" style="float: right"></h2>

    @yield('content')
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="https://kit.fontawesome.com/f4d8879ff1.js" crossorigin="anonymous"></script>
<script>
    document.getElementById('timer').innerHTML =
        005 + ":" + 00;
    startTimer();

    function startTimer() {
        var presentTime = document.getElementById('timer').innerHTML;
        var timeArray = presentTime.split(/[:]+/);
        var m = timeArray[0];
        var s = checkSecond((timeArray[1] - 1));
        if(s==59){m=m-1}
        if(m<0){alert('timer completed')}

        document.getElementById('timer').innerHTML =
            m + ":" + s;
        console.log(m)
        setTimeout(startTimer, 1000);
    }

    function checkSecond(sec) {
        if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
        if (sec < 0) {sec = "59"};
        return sec;
    }
</script>
</body>


</html>