<section id="favourite-quote" class="favourite-quote-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12">
          <div
            class="favourite-quote-content wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <img src="img/quote-icon-2.svg" alt="#" />
            <div class="fav-quote-content-main">
                @if (!empty ($quotes_settings->quotes_title))
                    <h2 class="fav-quote-cont-title">
                        {{ $quotes_settings->quotes_title }}
                    </h2>
                @endif

                @if (empty ($quotes_settings->quotes_title))
                    <h2 class="fav-quote-cont-title">
                        Enter Quotes Here
                    </h2>
                @endif

                @if (!empty ($quotes_settings->quotes_author))
                    <p class="fav-quote-cont-sm-title">- {{ $quotes_settings->quotes_author }}</p>
                @endif

                @if (empty ($quotes_settings->quotes_author))
                    <p class="fav-quote-cont-sm-title">- Author name</p>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
