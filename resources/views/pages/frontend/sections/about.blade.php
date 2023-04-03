
<!-- About Area -->
<section id="about" class="about-me-area">
    <div class="about-me-img wow fadeInLeft" data-wow-delay="0.1s">
        @if (!empty ($about_settings->about_image))
        <img src="{{$about_settings->about_image}}" alt="#" />
        @endif

        @if (empty ($about_settings->about_image))
        <img src="img/about-img.jpg" alt="#" />
        @endif
    </div>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-lg-12 col-xl-5 offset-xl-6 col-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-me-content">
                    <h3 class="aboutme-cont-big-title">Grettings!</h3>
                    <div class="aboutme-cont-sm-info">
                        <h4 class="aboutme-cont-sm-info-title">
                            @if (!empty ($about_settings->about_name))
                            I’m <span> {{$about_settings->about_name}}</span>
                            @endif

                            @if (empty ($about_settings->about_name))
                            I’m <span> 'Your name' </span>
                            @endif
                        </h4>
                        @if (!empty ($about_settings->about_quote))
                        <p class="aboutme-cont-sm-info-text">
                            "{{$about_settings->about_quote}}"
                        </p>
                        @endif

                        @if (empty ($about_settings->about_quote))
                        <p class="aboutme-cont-sm-info-text">
                            "Your Quotes will be here"
                        </p>
                        @endif

                    </div>
                    <div class="aboutme-cont-main">
                        @if (!empty ($about_settings->about_description))
                        <p class="aboutme-cont-text">
                            <?php echo strip_tags($about_settings->about_description); ?>
                        </p>
                        @endif

                        @if (empty ($about_settings->about_description))
                        <p class="aboutme-cont-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Etiam dapibus est a nibh vestibulum, sed suscipit velit lobortis.
                            Mauris vehicula hendrerit enim quis mollis.
                            Interdum et malesuada fames ac ante ipsum primis in faucibus.
                        </p>
                        @endif

                        <div class="aboutme-cont-bottom">
                            @if (!empty ($about_settings->about_qus))
                            <h4 class="aboutme-cont-btm-title">
                                {{$about_settings->about_qus}}
                            </h4>
                            @endif

                            @if (empty ($about_settings->about_qus))
                            <h4 class="aboutme-cont-btm-title">
                                'Your question will be here?'
                            </h4>
                            @endif

                            @if (!empty ($about_settings->about_button_text))
                            <div class="aboutme-cont-btn">
                                <a href="{{ $about_settings->about_button_url }}" target="_blank" class="theme-btn">{{$about_settings->about_button_text}}<i class="fi-rr-arrow-right"></i><i class="fi-rr-arrow-right"></i></a>
                            </div>
                            @endif

                            @if (empty ($about_settings->about_button_text))
                            <div class="aboutme-cont-btn">
                                <a href="#" class="theme-btn">
                                    Enter Button text
                                    <i class="fi-rr-arrow-right"></i><i class="fi-rr-arrow-right"></i></a>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->

@section('scripts')
<script>
    const div = document.querySelector('.aboutme-cont-text');

</script>
@endsection

