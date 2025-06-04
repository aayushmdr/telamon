
//For loader
// $(window).on("load", function(){
//     $(".loader-wrapper").fadeOut("slow");
//     $("body").removeClass("preload"); 
// });

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay: {
   delay: 2000,
   pauseOnMouseEnter: true
 },
 spaceBetween: 20,
 breakpoints: {
    // when window width is >= 0px
    0: {
      slidesPerView: 1
    },
    // when window width is >= 768px (e.g., tablets and up)
    992: {
      slidesPerView: 2
    }
  },

//  effect: 'fade',
//   fadeEffect: {
//     crossFade: true
//   },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

