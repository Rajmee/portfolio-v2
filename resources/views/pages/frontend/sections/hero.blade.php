
<section id="home" class="hero-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="hero-inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slider">

                                @if (empty ($sliders_list))
                                <!-- Single Slider -->
                                <div class="hero-single-slider">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-6 col-12">
                                            <div class="hero-content">
                                                <span class="hero-sm-title"><img src="./img/text-shape.svg" alt="#" />Welcome
                                                    to My Website</span>
                                                <h1 class="hero-big-title">
                                                    Building a Thriving Business from the Ground Up
                                                </h1>
                                                <div class="hero-btn">
                                                    <a href="#" class="theme-btn">Get a free consultation<i class="fi-rr-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6 col-12 order-class">
                                            <div class="hero-img">
                                                <img src="./img/hero-images/img-1.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slider -->
                                @endif

                                @if (!empty ($sliders_list))

                                @foreach ($sliders_list as $list)
                                <!-- Single Slider -->
                                <div class="hero-single-slider">
                                    <div class="row">
                                        <div class="col-lg-12 col-xl-6 col-12">
                                            <div class="hero-content">
                                                <span class="hero-sm-title"><img src="./img/text-shape.svg" alt="#" />{{$list->hero_sub_title}}</span>
                                                <h1 class="hero-big-title">
                                                    {{$list->hero_title}}
                                                </h1>
                                                <div class="hero-btn">
                                                    <a href="{{$list->hero_button_url}}" class="theme-btn">{{$list->hero_button_text}}<i class="fi-rr-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-xl-6 col-12 order-class">
                                            <div class="hero-img">
                                                <img src="{{$list->hero_img}}" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Slider -->

                                @endforeach
                                @endif


                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Hero Social Icons -->
                            <div class="hero-social">
                                <span class="hero-social-title">Follow me</span>
                                <ul class="hero-social-list">
                                    <li>
                                        <a href="#" target="_blank"><img src="./img/icons/facebook.svg" alt="#" /></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><img src="./img/icons/linkedin.svg" alt="#" /></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><img src="./img/icons/twitter.svg" alt="#" /></a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank"><img src="./img/icons/instagram.svg" alt="#" /></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Scroll Down Button -->
                            <div class="hero-scroll-down-btn">
                                <a href="#about" class="scroll-down"></a>
                            </div>
                            <!-- Hero Characteristic -->
                            <div class="hero-characteristic">
                                <div class="hero-characteristic-list">

                                    @if (!empty ($banner_settings->hero_tag_one))
                                    <span>{{$banner_settings->hero_tag_one}}</span>
                                    @endif
                                    @if (empty ($banner_settings->hero_tag_one))
                                    <span>Enthusiastic</span>
                                    @endif
                                    @if (!empty ($banner_settings->hero_tag_two))
                                    <span>{{$banner_settings->hero_tag_two}}</span>
                                    @endif
                                    @if (empty ($banner_settings->hero_tag_two))
                                    <span>Creative</span>
                                    @endif
                                    @if (!empty ($banner_settings->hero_tag_three))
                                    <span>{{$banner_settings->hero_tag_three}}</span>
                                    @endif
                                    @if (empty ($banner_settings->hero_tag_three))
                                    <span>Aesthetic</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
