<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @if (!empty ($site_settings->site_title))
        <title>{{ $site_settings->site_title }}</title>
    @endif

    @if (empty ($site_settings->site_title))
        <title>Portfolio Website</title>
    @endif

    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    @if (!empty ($site_settings->site_favicon))
        <link rel="icon" href="{{ url($site_settings->site_favicon) }}" />
    @endif

    @if (empty ($site_settings->site_favicon))
        <link rel="icon" href="" />
    @endif

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

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- Mobile Menu Modal -->
    <div class="modal mobile-menu-modal offcanvas-modal fade" id="offcanvas-modal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <!-- offcanvas-logo-start -->
                    <!-- <div class="offcanvas-logo">
              <a href="#"><img src="./assets/img/logo.svg" alt="#" /></a>
            </div> -->
                    <!-- offcanvas-logo-end -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="icofont-close-line"></i>
                    </button>
                </div>
                <div class="mobile-menu-modal-main-body">
                    <!-- offcanvas-menu start -->
                    <nav id="offcanvas-menu" class="offcanvas-menu">
                        <ul id="mobile-nav" class="list-none offcanvas-men-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#about">About me</a></li>
                            <li><a href="#experience">Expertise area</a></li>
                            <li><a href="#testimonial">Testimonials</a></li>
                            <li><a href="#business-solution">Business solution</a></li>
                            <li><a href="#photography">Photography</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#contact">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- offcanvas-menu end -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Menu Modal -->

    <!-- Mobile Menu Button -->
    <button type="button" class="mobile-menu-offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </button>
    <!-- End Mobile Menu Button -->

    <!-- Header Area -->
    <header class="header-area" id="active-sticky">
        <div class="container-fluid">
            <div class="header-menu">
                <nav class="navigation">
                    <ul id="nav" class="header-menu-list">
                        <li><a href="{{route('index')}}#home">Home</a></li>
                        <li><a href="{{route('index')}}/#about">About me</a></li>
                        <li><a href="{{route('index')}}/#experience">Expertise area</a></li>
                        <li><a href="{{route('index')}}/#testimonial">Testimonials</a></li>
                        <li><a href="{{route('index')}}/#business-solution">Business solution</a></li>
                        <li><a href="{{route('index')}}/#photography">Photography</a></li>
                        <li><a href="{{route('index')}}/#blog">Blog</a></li>
                        <li><a href="{{route('index')}}/#contact">Contact us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header Area -->


<section class="blog-details-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="blog-details-inner">
            <div class="row">
              <div class="col-lg-12 col-xl-7 col-12">
                <div class="blog-details-content-top">
                  <span class="blog-details-cont-tag">{{$single_blog->blog_category->blog_cat}}</span>
                  <h4 class="blog-details-cont-title">
                    {{ $single_blog->blog_title }}

                  </h4>
                  <ul class="blog-details-cont-author">
                    <li>Publish by: <span> {{ $single_blog->blog_author }} </span></li>
                    <li>Publish date: <span> {{ $single_blog->updated_at->format('d.m.Y') }} </span></li>
                  </ul>
                </div>
              </div>
              <div class="col-12">
                <div class="blog-details-content-img">
                  <img src="{{url($single_blog->blog_img)}}" alt="#" />
                </div>
              </div>
              <div class="col-lg-12 col-xl-12 col-12">
                <div class="blog-details-content-main">
                  <p class="blog-details-text">
                    <?php echo strip_tags($single_blog->blog_desc, '<figure><img><h4><h3><h2><h1><strong><br><ul></ul><li></li>'); ?>
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
  <!-- Main JS -->
  <script src="{{asset('js/active.js')}}"></script>
  </body>
  </html>
