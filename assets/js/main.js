
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
   delay: 4000,
 },
 slidesPerView: 1,
 spaceBetween: 0,
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