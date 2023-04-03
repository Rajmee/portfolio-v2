    <!-- Blog Area -->
    <section id="blog" class="blog-area blog-section">
        <div class="container-fluid">
            <div class="row">
                <div class="blog-section-head">

                    @if (!empty ($blog_section_settings->blog_section_title))
                    <span class="blog-sec-sm-title wow fadeInUp" data-wow-delay="0.1s">{{ $blog_section_settings->blog_section_title }}</span>
                    @endif

                    @if (empty ($blog_section_settings->blog_section_title))
                    <span class="blog-sec-sm-title wow fadeInUp" data-wow-delay="0.1s">Enter section title</span>
                    @endif

                    @if (!empty ($blog_section_settings->blog_title))
                    <h3 class="blog-sec-head-title wow fadeInUp" data-wow-delay="0.2s">
                        {{ $blog_section_settings->blog_title }}
                    </h3>
                    @endif

                    @if (empty ($blog_section_settings->blog_title))
                    <h3 class="blog-sec-head-title wow fadeInUp" data-wow-delay="0.2s">
                        News and Blogs
                    </h3>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-slider">

                        <?php $counter = 1 ?>
                        @foreach ($blog_list as $list)

                        @if ($counter % 2 != 0)



                        <div class="blog-single-card card-1">
                            <div class="blog-card-img">
                                <img src="{{ $list->blog_img }}" alt="#" />
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

                        @endif

                        @if ($counter % 2 == 0)


                        <div class="blog-single-card card-2">
                            <div class="blog-card-img">
                                <img src="{{ $list->blog_img }}" alt="#" />
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

                        @endif
                        <?php $counter++?>
                        @endforeach


                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="photography-section-bottom load-more-btn">
                            <a href="{{route('user.blog-post.all')}}" class="theme-btn"><i class="fi-rr-spinner-alt"></i>View more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

