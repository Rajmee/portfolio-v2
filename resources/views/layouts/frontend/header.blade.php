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
    <svg
      class="progress-circle svg-content"
      width="100%"
      height="100%"
      viewBox="-1 -1 102 102"
    >
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- back to top end -->

{{-- @php
   @var $social_list App\Http\ViewModels\HeaderSocialSettings
@endphp --}}

    <!-- Mobile Menu Button -->
    <button
      type="button"
      class="mobile-menu-offcanvas-toggler"
      data-bs-toggle="modal"
      data-bs-target="#offcanvas-modal"
    >
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </button>
    <!-- End Mobile Menu Button -->

{{-- <div class="follow-me-fixed">
  <ul class="follow-me-social">
    <li>
        @if (!empty ($header_social_settings->facebook))
            <a href="{{$header_social_settings->facebook}}" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/facebook.svg')}}"
            /></a>
        @endif

        @if (empty ($header_social_settings->facebook))
            <a href="#" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/facebook.svg')}}"
            /></a>
        @endif

    </li>
    <li>
        @if (!empty ($header_social_settings->linkedin))
            <a href="{{$header_social_settings->linkedin}}" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/linkedin.svg')}}"
            /></a>
        @endif

        @if (empty ($header_social_settings->linkedin))
            <a href="#" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/linkedin.svg')}}"
            /></a>
        @endif
    </li>
    <li>
        @if (!empty ($header_social_settings->twitter))
            <a href="{{$header_social_settings->twitter}}" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/twitter.svg')}}"
            /></a>
        @endif

        @if (empty ($header_social_settings->twitter))
            <a href="#" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/twitter.svg')}}"
            /></a>
        @endif
    </li>
    <li>
        @if (!empty ($header_social_settings->instagram))
            <a href="{{$header_social_settings->instagram}}" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/instagram.svg')}}"
            /></a>
        @endif

        @if (empty ($header_social_settings->linkedin))
            <a href="#" target="_blank"
            ><img src="{{asset('img/follow-me-social-icon/instagram.svg')}}"
            /></a>
        @endif
    </li>

  </ul>
  <p class="follow-me-text">Follow me</p>
</div> --}}

<!-- Header -->
{{-- <header class="header">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-12">
        <div class="navigation">
          <input
            type="checkbox"
            class="navigation__checkbox"
            id="nav-toggle"
          />
          <label for="nav-toggle" class="navigation__button">
            <span
              class="navigation__icon"
              aria-label="toggle navigation menu"
            ></span>
          </label>
          <div class="navigation__background"></div>

          <nav class="navigation__nav" role="navigation">
            <ul class="navigation__list">
              <li class="navigation__item">
                <a href="{{route('index')}}" class="navigation__link active"
                  >Home</a
                >
              </li>
              <li class="navigation__item">
                <a href="{{route('user.blog-post.all')}}" class="navigation__link"
                  >Blog/case</a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header> --}}

    <!-- Header Area -->
    <header class="header-area" id="active-sticky">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="header-menu">
                <nav class="navigation">
                  <ul id="nav" class="header-menu-list">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#about">About me</a></li>
                    <li><a href="#experience">Expertise area</a></li>
                    <li><a href="#testimonial">Testimonials</a></li>
                    <li><a href="#business-solution">Business solution</a></li>
                    <li><a href="#photography">Photography</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact us</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End Header Area -->
