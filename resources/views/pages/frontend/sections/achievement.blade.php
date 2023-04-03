<section id="achievement" class="achievement-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-12">
                <div class="achievement-section-head">

                    @if (!empty ($achievement_title->section_title))
                    <span class="achieve-section-sm-title wow fadeInUp" data-wow-delay="0.1s">{{$achievement_title->section_title}} </span>
                    @endif

                    @if (empty ($achievement_title->section_title))
                    <span class="achieve-section-sm-title wow fadeInUp" data-wow-delay="0.1s">Section Title </span>
                    @endif

                    @if (!empty ($achievement_title->title))
                    <h3 class="achieve-section-big-title wow fadeInUp" data-wow-delay="0.2s">{{ $achievement_title->title }}</h3>
                    @endif

                    @if (empty ($achievement_title->title))
                    <h3 class="achieve-section-big-title wow fadeInUp" data-wow-delay="0.2s">Enter text here</h3>
                    @endif

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="achivement-counter-area">
                    <div class="row">
                        <div class="col-lg-6 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="achievement-counter-card">
                                <div class="achievement-counter-card-top">
                                    <div class="achievement-counter-icon">
                                        @if (!empty ($achievement_title->ach_col_1_icon))
                                        <img src="{{ $achievement_title->ach_col_1_icon }}" alt="#" />
                                        @endif

                                        @if (empty ($achievement_title->ach_col_1_icon))
                                        <img src="img/achievement-icon/icon-1.svg" alt="#" />
                                        @endif

                                    </div>
                                    <div class="achievement-counter-content">
                                        <h3 class="achievement-counter">
                                            @if (!empty ($achievement_title->ach_col_1_count))
                                                <span class="counter">{{ $achievement_title->ach_col_1_count }}</span>+
                                                @endif

                                                @if (empty ($achievement_title->ach_col_1_count))
                                                <span class="counter">1000</span>+
                                                @endif
                                        </h3>
                                        @if (!empty ($achievement_title->ach_col_1_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            {{ $achievement_title->ach_col_1_title }}
                                        </h4>
                                        @endif

                                        @if (empty ($achievement_title->ach_col_1_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            Title text
                                        </h4>
                                        @endif
                                    </div>
                                </div>

                                @if (!empty ($achievement_title->ach_col_1_desc))
                                <p class="achievement-count-card-text">

                                    <?php echo strip_tags($achievement_title->ach_col_1_desc); ?>


                                </p>
                                @endif

                                @if (empty ($achievement_title->ach_col_1_desc))
                                <p class="achievement-count-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum delectus esse perspiciatis laboriosam maiores dicta fugit possimus nam iste eos quod, quisquam, distinctio id, sit iusto illum perferendis ducimus rerum!
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="achievement-counter-card">
                                <div class="achievement-counter-card-top">
                                    <div class="achievement-counter-icon">
                                        @if (!empty ($achievement_title->ach_col_2_icon))
                                        <img src="{{ $achievement_title->ach_col_2_icon }}" alt="#" />
                                        @endif

                                        @if (empty ($achievement_title->ach_col_2_icon))
                                        <img src="img/achievement-icon/icon-2.svg" alt="#" />
                                        @endif
                                    </div>
                                    <div class="achievement-counter-content">
                                        <h3 class="achievement-counter">
                                            @if (!empty ($achievement_title->ach_col_2_count))
                                                <span class="counter">{{ $achievement_title->ach_col_2_count }}</span>+
                                                @endif

                                                @if (empty ($achievement_title->ach_col_2_count))
                                                <span class="counter">2000</span>+
                                                @endif
                                        </h3>
                                        @if (!empty ($achievement_title->ach_col_2_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            {{ $achievement_title->ach_col_2_title }}
                                        </h4>
                                        @endif

                                        @if (empty ($achievement_title->ach_col_2_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            Title text
                                        </h4>
                                        @endif
                                    </div>
                                </div>
                                @if (!empty ($achievement_title->ach_col_2_desc))
                                <p class="achievement-count-card-text">

                                    <?php echo strip_tags($achievement_title->ach_col_2_desc); ?>


                                </p>
                                @endif

                                @if (empty ($achievement_title->ach_col_2_desc))
                                <p class="achievement-count-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum delectus esse perspiciatis laboriosam maiores dicta fugit possimus nam iste eos quod, quisquam, distinctio id, sit iusto illum perferendis ducimus rerum!
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="achievement-counter-card">
                                <div class="achievement-counter-card-top">
                                    <div class="achievement-counter-icon">
                                        @if (!empty ($achievement_title->ach_col_3_icon))
                                        <img src="{{ $achievement_title->ach_col_3_icon }}" alt="#" />
                                        @endif

                                        @if (empty ($achievement_title->ach_col_3_icon))
                                        <img src="img/achievement-icon/icon-3.svg" alt="#" />
                                        @endif
                                    </div>
                                    <div class="achievement-counter-content">
                                        <h3 class="achievement-counter">
                                            @if (!empty ($achievement_title->ach_col_3_count))
                                                <span class="counter">{{ $achievement_title->ach_col_3_count }}</span>+
                                                @endif

                                                @if (empty ($achievement_title->ach_col_3_count))
                                                <span class="counter">3000</span>+
                                                @endif
                                        </h3>
                                        @if (!empty ($achievement_title->ach_col_3_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            {{ $achievement_title->ach_col_3_title }}
                                        </h4>
                                        @endif

                                        @if (empty ($achievement_title->ach_col_3_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            Title text
                                        </h4>
                                        @endif
                                    </div>
                                </div>
                                @if (!empty ($achievement_title->ach_col_3_desc))
                                <p class="achievement-count-card-text">

                                    <?php echo strip_tags($achievement_title->ach_col_3_desc); ?>


                                </p>
                                @endif

                                @if (empty ($achievement_title->ach_col_3_desc))
                                <p class="achievement-count-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum delectus esse perspiciatis laboriosam maiores dicta fugit possimus nam iste eos quod, quisquam, distinctio id, sit iusto illum perferendis ducimus rerum!
                                </p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="achievement-counter-card">
                                <div class="achievement-counter-card-top">
                                    <div class="achievement-counter-icon">
                                        @if (!empty ($achievement_title->ach_col_4_icon))
                                        <img src="{{ $achievement_title->ach_col_4_icon }}" alt="#" />
                                        @endif

                                        @if (empty ($achievement_title->ach_col_4_icon))
                                        <img src="img/achievement-icon/icon-4.svg" alt="#" />
                                        @endif
                                    </div>
                                    <div class="achievement-counter-content">
                                        <h3 class="achievement-counter">
                                            @if (!empty ($achievement_title->ach_col_4_count))
                                                <span class="counter">{{ $achievement_title->ach_col_3_count }}</span>+
                                                @endif

                                                @if (empty ($achievement_title->ach_col_4_count))
                                                <span class="counter">4000</span>+
                                                @endif
                                        </h3>
                                        @if (!empty ($achievement_title->ach_col_4_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            {{ $achievement_title->ach_col_4_title }}
                                        </h4>
                                        @endif

                                        @if (empty ($achievement_title->ach_col_4_title))
                                        <h4 class="achievement-count-card-sm-title">
                                            Title text
                                        </h4>
                                        @endif
                                    </div>
                                </div>
                                @if (!empty ($achievement_title->ach_col_4_desc))
                                <p class="achievement-count-card-text">

                                    <?php echo strip_tags($achievement_title->ach_col_4_desc); ?>


                                </p>
                                @endif

                                @if (empty ($achievement_title->ach_col_4_desc))
                                <p class="achievement-count-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum delectus esse perspiciatis laboriosam maiores dicta fugit possimus nam iste eos quod, quisquam, distinctio id, sit iusto illum perferendis ducimus rerum!
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="achievement-scroll-area">
                    <div class="achievement-scroll-head">
                        @if (!empty ($achievement_title->section_list_title))
                        <h3 class="achievement-scroll-title">
                            <img src="img/achivement-icon/badge-icon.svg" />{{ $achievement_title->section_list_title }}
                        </h3>
                    @endif

                    @if (empty ($achievement_title->section_list_title))
                        <h3 class="achievement-scroll-title">
                            <img src="img/achivement-icon/badge-icon.svg" />Enter Text
                        </h3>
                    @endif
                    </div>
                    <div class="achievement-card-slider">

                        @foreach ($achievement_list as $list)

                        <!-- Achievement Card Single Slider -->
                        <div class="achievement-single-card">
                            <div class="achievement-card-images">
                                <div class="achievement-award-icon">
                                    <img src="img/achievement-icon/badge-icon-2.svg" alt="#" />
                                </div>
                                <div class="achievement-company-icon">
                                    <a href="#" target="_blank"><img src="{{ $list->org_img }}" alt="#" /></a>
                                </div>
                            </div>
                            <div class="achievement-card-content">
                                <h3 class="achievement-card-cont-title">{{ $list->org_title }}</h3>
                                <span class="achievement-card-cont-date">{{ $list->org_date }}</span>
                                <p class="achievement-card-cont-text">
                                    <?php echo strip_tags($list->org_desc); ?>
                                </p>
                                <div class="achievement-card-cont-btn">
                                    <a href="{{ $list->org_button_url }}" class="theme-btn">{{ $list->org_button_text }}<i class="fi-rr-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

            @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

