<section id="experience" class="experience-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-xl-5 col-12 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="experience-section-head">
                    @if (!empty ($expertise_title->expertise_section_title))
                    <h2 class="exp-section-head-title">{{$expertise_title->expertise_section_title}}</h2>
                    @endif

                    @if (empty ($expertise_title->expertise_section_title))
                    <h2 class="exp-section-head-title">Enter Section Title</h2>
                    @endif

                    @if (!empty ($expertise_title->expertise_section_desc))
                    <p class="exp-section-head-text">
                        {{$expertise_title->expertise_section_desc}}
                    </p>
                    @endif

                    @if (empty ($expertise_title->expertise_section_desc))
                    <p class="exp-section-head-text">
                        As an exception businessman, I am unique in the world. There are
                        some niches in which I am an expert. The following is a list of
                        some of my areas of expertise.
                    </p>
                    @endif

                </div>
            </div>
        </div>
        <div class="row">


            @foreach ($expertise_infolist as $list)


            <div class="col-lg-4 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="experience-single-card">
                    <div class="exp-card-icon">
                        <img src="{{ $list->expertise_info_icon }}" alt="#" />
                    </div>
                    <div class="exp-card-content">
                        <h4 class="exp-card-content-title">{{ $list->expertise_info_title }}</h4>
                        <p class="exp-card-content-text">
                            <?php echo strip_tags($list->expertise_info_desc); ?>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

