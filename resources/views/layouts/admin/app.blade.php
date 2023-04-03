<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Portfolio - Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: [' {{asset("assets/css/fonts.min.css")}}' ]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
    <script src="https://cdn.tiny.cloud/1/yvlds8pa5rekuicvuj6fll1esxvyka1l463cba5cfv82brx1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>



	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
	<link rel="stylesheet" href="{{asset('css/uicons.css')}}">

</head>
<body>



        @include('layouts.admin.header')

		@include('alert.messages')

        @yield('content')

		@include('layouts.admin.footer')


