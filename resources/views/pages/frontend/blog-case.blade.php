<!DOCTYPE html>
<html class="no-js" lang="ZXX">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="#" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Site Title -->
    @if (!empty ($site_settings->site_title))
    <title>{{ $site_settings->site_title }}</title>
    @endif

    @if (empty ($site_settings->site_title))
    <title>Portfolio Website</title>
    @endif

    <!-- Fav Icon -->
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--[if IE]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

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

    <!-- Breadcrumbs Area -->
    <section class="breadcrumbs-area" style="background-image: url('http://127.0.0.1:8000/img/breadcrumbs-bg.png')">
        <div class="container-fluid">
            <div class="row">
                @if (!empty ($blog_section_settings->blog_section_title))
                <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-12">
                    <h3 class="breadcrumb-title">[{{ $blog_section_settings->blog_section_title }}]</h3>
                </div>
                @endif

                @if (empty ($blog_section_settings->blog_section_title))
                <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-12">
                    <h3 class="breadcrumb-title">[Enter text here]</h3>
                </div>
                @endif

            </div>
        </div>
    </section>
    <!-- End Breadcrumbs Area -->

    <!-- Blog Case Page Area -->
    <section class="blog-case-page-section">
        <div class="container-fluid">
            <div class="row">

                <?php $counter = 1 ?>
                @foreach ($blog_list as $list)

                @if ($counter % 2 != 0)

                <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                    <div class="blog-single-card card-1">
                        <div class="blog-card-img">
                            <img src="{{ url($list->blog_img) }}" alt="#" />
                        </div>
                        <div class="blog-card-content">
                            <span class="blog-card-cont-category">{{$list->blog_category->blog_cat}}</span>
                            <h3 class="blog-card-cont-title">
                                {{ $list->blog_title }}
                            </h3>
                            <div class="blog-card-cont-btn">
                                <a href="{{route('user.blog-post.view', [$list->slug, $list->id])}}" class="theme-btn">Read more<i class="fi-rr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if ($counter % 2 == 0)



                <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                    <div class="blog-single-card card-2">
                        <div class="blog-card-img">
                            <img src="{{ url($list->blog_img) }}" alt="#" />
                        </div>
                        <div class="blog-card-content">
                            <span class="blog-card-cont-category">{{$list->blog_category->blog_cat}}</span>
                            <h3 class="blog-card-cont-title">
                                {{ $list->blog_title }}

                            </h3>
                            <div class="blog-card-cont-btn">
                                <a href="{{route('user.blog-post.view', [$list->slug, $list->id])}}" class="theme-btn">Read more<i class="fi-rr-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endif
                <?php $counter++?>
                @endforeach


            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-case-section-bottom load-more-btn">
                        <a href="#" class="theme-btn"><i class="fi-rr-spinner-alt"></i>Load more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Case Page Area -->

    <!-- Footer Area -->
    @include('layouts.frontend.footer')

    <!-- End Footer Area -->

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
    <!-- OnePage Nav JS -->
    <script src="{{ asset('js/onepage-nav.min.js') }}"></script>
    <!-- Main JS -->

</body>
</html>

