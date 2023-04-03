<section id="business-solution" class="business-solution-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 col-12">
                <div class="biz-solution-content">

                    @if (!empty ($business_title->business_settings_section_title))
                    <span class="biz-solution-cont-sm-title wow fadeInUp" data-wow-delay="0.1s">{{$business_title->business_settings_section_title}}</span>
                @endif

                @if (empty ($business_title->business_settings_section_title))
                    <span class="biz-solution-cont-sm-title wow fadeInUp" data-wow-delay="0.1s">Enter section title</span>
                @endif

                @if (!empty ($business_title->business_settings_title))
                    <h2 class="biz-solution-cont-big-title wow fadeInUp" data-wow-delay="0.2s">
                        {{$business_title->business_settings_title}}
                    </h2>
                @endif

                @if (empty ($business_title->business_settings_title))
                    <h2 class="biz-solution-cont-big-title wow fadeInUp" data-wow-delay="0.2s">
                        Enter Text Here.
                    </h2>
                @endif

                @if (!empty ($business_title->business_settings_desc))
                    <p class="biz-solution-cont-text wow fadeInUp" data-wow-delay="0.3s">
                        <?php echo strip_tags($business_title->business_settings_desc); ?>

                    </p>
                @endif

                @if (empty ($business_title->business_settings_desc))
                    <p class="biz-solution-cont-text wow fadeInUp" data-wow-delay="0.3s">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Molestias asperiores facilis adipisci, ullam eaque nobis.
                        Nesciunt quisquam culpa fuga ullam omnis repellendus aperiam
                        atque dolore quaerat esse! Possimus, cumque dignissimos.
                    </p>
                @endif
                </div>
            </div>
        </div>
        <div class="row">

        @if (empty ($business_list))

            <div class="col-lg-6 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="biz-solution-card">
                    <span class="card-border-icon icon-1"><img src="img/business-solution-icon/card-borser-icon-1.svg" /></span>
                    <div class="biz-solution-card-icon">
                        <img src="img/business-solution-icon/icon-1.svg" alt="#" />
                    </div>
                    <div class="biz-solution-card-content">
                        <h3 class="biz-solution-card-title">Software Solution</h3>
                        <p class="biz-solution-card-tag">
                            Founder & CEO at
                            <a href="https://softifybd.com/" target="_blank">SoftifyBD Ltd.</a>
                        </p>
                        <div class="biz-solution-card-btn">
                            <a href="#" class="theme-btn">Visit website<i class="fi-rr-arrow-right"></i></a>
                        </div>
                    </div>
                    <span class="card-border-icon icon-2"><img src="img/business-solution-icon/card-borser-icon-2.svg" /></span>
                </div>
            </div>

        @endif

        @if (!empty ($business_list))

        @foreach ($business_list as $list)

        <div class="col-lg-6 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="biz-solution-card">
                <span class="card-border-icon icon-1"><img src="img/business-solution-icon/card-borser-icon-1.svg" /></span>
                <div class="biz-solution-card-icon">
                    <img src="{{$list->business_list_img}}" alt="#" />
                </div>
                <div class="biz-solution-card-content">
                    <h3 class="biz-solution-card-title">{{$list->business_list_title}}</h3>
                    <p class="biz-solution-card-tag">
                        {{$list->business_list_pos}}
                        <a href="{{ $list->business_list_button_url }}" target="_blank">{{$list->business_list_comp}}</a>
                    </p>
                    <div class="biz-solution-card-btn">
                        <a href="{{ $list->business_list_button_url }}" class="theme-btn">{{$list->business_list_button_text}}<i class="fi-rr-arrow-right"></i></a>
                    </div>
                </div>
                <span class="card-border-icon icon-2"><img src="img/business-solution-icon/card-borser-icon-2.svg" /></span>
            </div>
        </div>

        @endforeach
            @endif


        </div>
    </div>
</section>

