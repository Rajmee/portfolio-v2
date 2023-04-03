<!-- Testimonial Area -->
<section id="testimonial" class="testimonial-area">
    <div class="testimonial-bg-image">
        <img src="img/testimonial-images/testimonial-bg.png" alt="#" />
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-4 offset-xl-1 col-12 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="testimonial-content">
                    @if (!empty ($testimonial_title->testimonial_settings_title))
                    <span class="testimonial-cont-sm-title">{{$testimonial_title->testimonial_settings_section_title}}</span>
                @endif

                @if (empty ($testimonial_title->testimonial_settings_title))
                    <span class="testimonial-cont-sm-title">Section Title</span>
                @endif
                @if (!empty ($testimonial_title->testimonial_settings_title))
                <h2 class="testimonial-cont-big-title">
                    {{$testimonial_title->testimonial_settings_title}}
                </h2>
            @endif

            @if (empty ($testimonial_title->testimonial_settings_title))
                <h2 class="testimonial-cont-big-title">
                    Enter text here
                </h2>
            @endif
            @if (!empty ($testimonial_title->testimonial_settings_desc))
            <p class="testimonial-cont-text">
                <?php echo strip_tags($testimonial_title->testimonial_settings_desc); ?>
            </p>
        @endif

        @if (empty ($testimonial_title->testimonial_settings_desc))
            <p class="testimonial-cont-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Molestias asperiores facilis adipisci, ullam eaque nobis.
                Nesciunt quisquam culpa fuga ullam omnis repellendus aperiam
                atque dolore quaerat esse! Possimus, cumque dignissimos.
            </p>
        @endif
                </div>
            </div>
            <div class="col-lg-12 col-xl-7 col-12">
                <div class="testimonial-quote-icon">
                    <img src="img/icons/quote-2.svg" alt="#" />
                </div>
                <div class="testimonial-slider">

            @if (empty ($testimonial_infolist))

                    <!-- Single Slider -->
                    <div class="testimonial-slider-single">
                        <div class="testimonial-single-top">
                            <div class="client-img">
                                <img src="img/testimonial-images/client-1.png" alt="#" />
                            </div>
                            <div class="client-name-and-company">
                                <h5 class="client-name">Esther Hills</h5>
                                <p class="client-company">Lead Intranet Technician</p>
                            </div>
                        </div>
                        <div class="testimonial-single-quote">
                            <p class="client-quote-text">
                                “I have been consistently impressed with Jhon's work ethic
                                and dedication to his clients. He is a true professional who
                                is always willing to go above and beyond to ensure that our
                                needs are met. His attention to detail and commitment to
                                excellence are truly remarkable, and I would recommend him
                                to anyone without hesitation."
                            </p>
                        </div>
                    </div>

                    @endif

                    @if (!empty ($testimonial_infolist))

                @foreach ($testimonial_infolist as $list)


                    <!-- Single Slider -->
                    <div class="testimonial-slider-single">
                        <div class="testimonial-single-top">
                            <div class="client-img">
                                <img src="{{$list->testimonial_list_image}}" alt="#" />
                            </div>
                            <div class="client-name-and-company">
                                <h5 class="client-name">{{$list->testimonial_list_name}}</h5>
                                <p class="client-company">{{$list->testimonial_list_info}}</p>
                            </div>
                        </div>
                        <div class="testimonial-single-quote">
                            <p class="client-quote-text">
                                “<?php echo strip_tags($list->testimonial_list_comment); ?>"
                            </p>
                        </div>
                    </div>
                @endforeach

                    @endif



                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonial Area -->

