<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Online Mocktest</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
<meta name="author" content="freehtml5.co" />


<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{asset('guest/css/icomoon.css')}}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{asset('guest/css/bootstrap.css')}}">

<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset('guest/css/magnific-popup.css')}}">

<!-- Owl Carousel  -->
<link rel="stylesheet" href="{{asset('guest/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('guest/css/owl.theme.default.min.css')}}">

<!-- Flexslider  -->
<link rel="stylesheet" href="{{asset('guest/css/flexslider.css')}}">

<!-- Pricing -->
<link rel="stylesheet" href="{{asset('guest/css/pricing.css')}}">

<!-- Theme style  -->
<link rel="stylesheet" href="{{asset('guest/css/style.css')}}">

<!-- Modernizr JS -->
<script src="{{asset('guest/js/modernizr-2.6.2.min.js')}}"></script>
<!-- FOR IE9 below -->
<!--[if lt IE 9]>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>     
    <div class="fh5co-loader"></div>
    <div id="page">
	
    @yield('content')

    <div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('guest/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('guest/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('guest/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('guest/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('guest/js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('guest/js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{asset('guest/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('guest/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('guest/js/magnific-popup-options.js')}}"></script>
	<!-- Count Down -->
	<script src="{{asset('guest/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('guest/js/main.js')}}"></script>
	<script>
	<script src="{{ mix('js/app.js') }}"></script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
</body>
</html>
