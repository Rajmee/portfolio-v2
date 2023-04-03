<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (!empty ($site_settings->meta_key))
        <meta name="keywords" content="{{ $site_settings->meta_key }}">
    @endif

    @if (empty ($site_settings->meta_key))
        <meta name="keywords" content="">
    @endif


    @if (!empty ($site_settings->meta_desc))
        <meta name="description" content="{{ $site_settings->meta_desc }}">
    @endif

    @if (empty ($site_settings->meta_desc))
        <meta name="description" content="">
    @endif


    @if (!empty ($site_settings->meta_author))
	    <meta name="author" content="{{ $site_settings->meta_author }}">
    @endif

    @if (empty ($site_settings->meta_author))
        <meta name="description" content="">
    @endif


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (!empty ($site_settings->site_title))
        <title>{{ $site_settings->site_title }}</title>
    @endif

    @if (empty ($site_settings->site_title))
        <title>Portfolio Website</title>
    @endif

    @if (!empty ($site_settings->site_favicon))
        <link rel="icon" href="<?php echo $site_settings->site_favicon ?>" />
    @endif

    @if (empty ($site_settings->site_favicon))
        <link rel="icon" href="" />
    @endif
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">



    <!-- Bootstrap -->


	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<!-- AOS CSS -->
	<link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- Maginific Popup -->
	<link rel="stylesheet" href="{{asset('css/maginific-popup.min.css')}}">
    <!-- Nice Popup -->
	<link rel="stylesheet" href="{{asset('css/nice-select.min.css')}}">
    <!-- Datepicker Popup -->
	<link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
    <!-- Fancybox Popup -->
	<link rel="stylesheet" href="{{asset('css/fancybox.css')}}">
	<!-- Back To Top CSS Portfolio -->
	<link rel="stylesheet" href="{{asset('css/backToTop.css')}}">
	<!-- Uicons -->
	<link rel="stylesheet" href="{{asset('css/uicons.css')}}">
    <!-- Icofont -->
	<link rel="stylesheet" href="{{asset('css/icofont.css')}}">
	<!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/style.min.css')}}">
</head>
<body>

    @include('layouts.frontend.header')

    @yield('content')

    @include('alert.messages')

    @include('layouts.frontend.footer')

<!-- Jquery JS -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Modernizer JS -->
<script src="{{asset('js/modernizer.min.js')}}"></script>
<!-- Maginific Popup JS -->
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Slick Slider JS -->
<script src="{{asset('js/slick.min.js')}}"></script>
<!-- FancyBox JS -->
<script src="{{asset('js/jquery-fancybox.min.js')}}"></script>
<!-- CounterUp JS -->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Nice Select JS -->
<script src="{{asset('js/nice-select.min.js')}}"></script>
<!-- Datepicker JS -->
<script src="{{asset('js/datepicker.js')}}"></script>
<!-- Back To Top JS -->
<script src="{{asset('js/backToTop.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('js/ajax-mail.js')}}"></script>
<!-- OnePage Nav JS -->
<script src="{{ asset('js/onepage-nav.min.js') }}"></script>
<!-- Main JS -->
<script src="{{asset('js/active.js')}}"></script>
</body>
</html>

