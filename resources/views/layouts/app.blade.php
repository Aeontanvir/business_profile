<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Voyager::setting('site.title') }}</title>







	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<!-- Animate.css -->
	<link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css" >
	<!-- Icomoon Icon Fonts-->
	<link href="{{ URL::asset('css/icomoon.css') }}" rel="stylesheet" type="text/css" >
	<!-- Bootstrap  -->
	<link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" >

	<!-- Magnific Popup -->
	<link href="{{ URL::asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css" >

	<!-- Owl Carousel  -->
	<link href="{{ URL::asset('css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ URL::asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" >

	<!-- Flexslider  -->
	<link href="{{ URL::asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" >

	<!-- Pricing -->
	<link href="{{ URL::asset('css/pricing.css') }}" rel="stylesheet" type="text/css" >

	<!-- Theme style  -->
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >

    <!-- Modernizr JS -->
    <script type="text/javascript" src="{{ URL::asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="{{ URL::asset('js/respond.min.js') }}"></script>
	<![endif]-->

</head>
<body>

	
	<div class="fh5co-loader"></div>
	
	<div id="page">

        @include('partials.main-menu');
        
        @yield('content')

        @include('partials.footer');
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<!-- jQuery -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Carousel -->
	<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
	<!-- Flexslider -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- countTo -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
	<!-- Magnific Popup -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/magnific-popup-options.js') }}"></script>
	<!-- Count Down -->
	<script type="text/javascript" src="{{ URL::asset('js/simplyCountdown.js') }}"></script>
	<!-- Main -->
	<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
	<script>
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