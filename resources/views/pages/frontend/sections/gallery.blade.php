    <!-- Photography Area -->
    <section id="photography" class="photography-area">
        <div class="container-fluid">
            <div class="row">
                <div class="photography-section-head">

                    @if (!empty ($image_title->section_title))
                    <span class="photography-sec-sm-title wow fadeInUp" data-wow-delay="0.1s">{{$image_title->section_title}}</span>
                    @endif

                    @if (empty ($image_title->section_title))
                    <span class="photography-sec-sm-title wow fadeInUp" data-wow-delay="0.1s">Enter Section Title</span>
                    @endif



                    @if (!empty ($image_title->title))
                    <h3 class="photography-sec-head-title wow fadeInUp" data-wow-delay="0.2s">
                        {{$image_title->title}}
                    </h3>
                    @endif

                    @if (empty ($image_title->title))
                    <h3 class="photography-sec-head-title wow fadeInUp" data-wow-delay="0.2s">
                        Enter Title
                    </h3>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="photography-gallery-inner wow fadeInUp" data-wow-delay="0.2s">
                        <div class="row g-0">
                            <div class="col-lg-12 col-xl-12 col-12">
                                <div class="row g-0">

                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="row g-0">

                    @foreach ($image_list as $img)

                        @if (!empty ($img->image))

                                            <div class="col-lg-3 col-md-4 col-12">
                                                <div class="photography-gallery-single">
                                                    <div class="gallery-single-img img-1">
                                                        <a href="{{ $img->image }}" data-fancybox="photo" class="image-view"><img src="{{ $img->image }}" alt="#" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            @endif

                        @if (empty ($img->image))

                                            <div class="col-lg-3 col-md-4 col-12">
                                                <div class="photography-gallery-single">
                                                    <div class="gallery-single-img img-2">
                                                        <a href="img/photography/img-2.png" data-fancybox="photo" class="image-view"><img src="img/photography/img-2.png" alt="#" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            @endif

                                            @endforeach


                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="photography-section-bottom load-more-btn">
                        <a href="#" class="theme-btn"><i class="fi-rr-spinner-alt"></i>Load more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Photography Area -->
