
//For loader
// $(window).on("load", function(){
//     $(".loader-wrapper").fadeOut("slow");
//     $("body").removeClass("preload"); 
// });

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  autoplay: {
   delay: 2000,
   pauseOnMouseEnter: true
 },
 spaceBetween: 20,
 grid: {
    rows: 1, // default
    fill: 'row',
  },
 breakpoints: {
    // when window width is >= 0px
    0: {
      slidesPerView: 1,
      rows: 1
    },
    // when window width is >= 768px (e.g., tablets and up)
    992: {
      slidesPerView: 2,
      grid: {
        rows: 2,
      },
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

// Loader JS
window.addEventListener('load', function () {
    const loader = document.getElementById('loader');
    const logo = loader.querySelector('.loader-logo');

    // Remove grayscale to show blue fill
    logo.style.filter = 'none';

    // Stop pulse after 1 pulse cycle (1.5s), then fade out loader
    setTimeout(() => {
      logo.style.animation = 'none';  // stop pulse

      // Fade out loader
      loader.style.opacity = '0';
      loader.style.transition = 'opacity 0.5s ease';

      setTimeout(() => {
        loader.style.display = 'none';
      }, 500);

    }, 1500);
  });