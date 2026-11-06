jQuery(document).ready(function($) {
    var scroll = $(window).scrollTop();
    var scrollup = $('.scroll-top');
    /*------------------------------------------------
              Scroll Top
    ------------------------------------------------*/
    scrollup.click(function () {
      $('html, body').animate({
        scrollTop: '0px'
      }, 800);
      return false;
    });
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
        scrollup.fadeIn();
      } else {
        scrollup.fadeOut();
      }
    });

    /*------------------------------------------------
              Homepage slider
    ------------------------------------------------*/
    var car_repair_blocks_Slider = new Swiper(".car-repair-blocks-swiper", {
    slidesPerView: 1,
    speed: 1000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".car-repair-blocks-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".car-repair-blocks-swiper-button-next",
      prevEl: ".car-repair-blocks-swiper-button-prev",
    },
  });

    /*------------------------------------------------
              Homepage Testimonial
    ------------------------------------------------*/
    var car_repair_blocks_testimonial_Slider = new Swiper(".car-repair-blocks-testimonial-swiper", {
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      600: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1100: {
        slidesPerView: 4,
      }
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".car-repair-blocks-testimonial-pagination",
      clickable: true,
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".car-repair-blocks-testimonial-swiper-button-next",
      prevEl: ".car-repair-blocks-testimonial-swiper-button-prev",
    },
  });

});
