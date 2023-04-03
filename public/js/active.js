(function ($) {
  "use strict";
  $(document).on("ready", function () {
    /*==============================================================================
		  Header Sticky JS
	  ===============================================================================*/
    var activeSticky = $("#active-sticky"),
      winDow = $(window);
    winDow.on("scroll", function () {
      var scroll = $(window).scrollTop(),
        isSticky = activeSticky;
      if (scroll < 50) {
        isSticky.removeClass("is-sticky");
      } else {
        isSticky.addClass("is-sticky");
      }
    });

    /*================================================================================
			Onepage Nav JS
		==================================================================================*/
    $("#nav, #mobile-nav").onePageNav({
      currentClass: "active",
      changeHash: false,
      scrollSpeed: 750,
      scrollThreshold: 0.5,
      filter: "",
      easing: "swing",
      begin: function () {
        //I get fired when the animation is starting
      },
      end: function () {
        //I get fired when the animation is ending
      },
      scrollChange: function ($currentListItem) {
        //I get fired when you enter a section and I pass the list item of the section
      },
    });

    /*=============================================================================
			Nice Select JS
  	===============================================================================*/
    $("select").niceSelect();

    /*==============================================================================
			CounterUp JS
		================================================================================*/
    $(".counter").counterUp({
      time: 1500,
    });

    /*===============================================================================
			DatePicker JS
		=================================================================================*/
    $(".datetimepicker").datetimepicker({
      timepicker: true,
      datepicker: true,
      format: "y-m-d H:i",
      hours12: false,
      step: 30,
    });

    // Only Date Picker
    $(".date-pick").datetimepicker({
      timepicker: false,
      datepicker: true,
      format: "m-d-y",
      step: 10,
    });

    // Only Time Picker
    $(".time-pick").datetimepicker({
      datepicker: false,
      timepicker: true,
      format: "H:i",
      hours12: false,
      step: 10,
    });

    /*=============================================================================
			 Video Popup JS
	  ===============================================================================*/
    $(".video-popup").magnificPopup({
      type: "iframe",
      removalDelay: 300,
      mainClass: "mfp-fade",
    });

    /*==============================================================================
		  Wow JS
	  ================================================================================*/
    var window_width = $(window).width();
    if (window_width > 767) {
      new WOW().init();
    }

    /*==============================================================================
		  Testimonial Slider
	  ================================================================================*/
    $(".testimonial-slider").slick({
      autoplay: true,
      speed: 800,
      autoplaySpeed: 3500,
      slidesToShow: 1,
      pauseOnHover: true,
      centerMode: true,
      cssEase: "linear",
      infinite: true,
      dots: false,
      arrows: true,
      speed: 700,
      draggable: true,
      prevArrow:
        '<button class="Prev"><i class="fi-ss-angle-small-left" aria-hidden="true"></i></button>',
      nextArrow:
        '<button class="Next"><i class="fi-ss-angle-small-right" aria-hidden="true"></i></button>',
    });

    /*==============================================================================
		  Blog Card Slider
	  ================================================================================*/
    $(".blog-slider").owlCarousel({
      items: 4,
      autoplay: false,
      loop: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      smartSpeed: 500,
      merge: true,
      nav: false,
      nav: true,
      navText: [
        '<i class="fi-rr-arrow-left aria-hidden="true"></i>',
        '<i class="fi-rr-arrow-right" aria-hidden="true"></i>',
      ],
      dots: false,
      margin: 20,
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 1,
        },
        768: {
          items: 2,
        },
        1170: {
          items: 4,
        },
        1920: {
          items: 4,
        },
      },
    });

    /*==============================================================================
		  Achievement Card Slider
	  ================================================================================*/
    $(".achievement-card-slider").owlCarousel({
      items: 4,
      autoplay: false,
      loop: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: false,
      smartSpeed: 500,
      merge: true,
      nav: false,
      nav: true,
      navText: [
        '<i class="fi-rr-arrow-left aria-hidden="true"></i>',
        '<i class="fi-rr-arrow-right" aria-hidden="true"></i>',
      ],
      dots: false,
      margin: 24,
      responsive: {
        300: {
          items: 1,
        },
        480: {
          items: 1,
        },
        1024: {
          items: 3,
        },
        768: {
          items: 2,
        },
        1170: {
          items: 4,
        },
        1920: {
          items: 4,
        },
      },
    });

    /*==============================================================================
		  Hero Slider
	  ================================================================================*/
    $(".hero-slider").slick({
      autoplay: true,
      speed: 800,
      autoplaySpeed: 3500,
      slidesToShow: 1,
      pauseOnHover: true,
      centerMode: true,
      cssEase: "linear",
      infinite: true,
      centerPadding: "0px",
      dots: false,
      arrows: true,
      cssEase: "ease",
      speed: 700,
      fade: true,
      draggable: true,
      prevArrow:
        '<button class="Prev"><i class="fi-rr-arrow-left" aria-hidden="true"></i></button>',
      nextArrow:
        '<button class="Next"><i class="fi-rr-arrow-right" aria-hidden="true"></i></button>',
    });

    var $slider = $(".hero-slider");

    if ($slider.length) {
      var currentSlide;
      var slidesCount;
      var sliderCounter = document.createElement("div");
      sliderCounter.classList.add("slider-counter");

      var updateSliderCounter = function (slick, currentIndex) {
        currentSlide = slick.slickCurrentSlide() + 1;
        slidesCount = slick.slideCount;
        $(sliderCounter).text(currentSlide + " of " + slidesCount);
      };

      $slider.on("init", function (event, slick) {
        $slider.append(sliderCounter);
        updateSliderCounter(slick);
      });

      $slider.on("afterChange", function (event, slick, currentSlide) {
        updateSliderCounter(slick, currentSlide);
      });

      $slider.slick();
    }
  });

  /*==============================================================================
		  Preloader JS
	================================================================================*/
  $(window).on("load", function (event) {
    $("#preloader").delay(800).fadeOut(500);
  });
})(jQuery);
