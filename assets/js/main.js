
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
  document.body.classList.add('loading'); // Disable scroll at start

  window.addEventListener('load', function () {
    const loader = document.getElementById('loader');
    const logo = loader.querySelector('.loader-logo');

    logo.style.filter = 'none'; // Remove grayscale for color fill

    setTimeout(() => {
      logo.style.animation = 'none'; // Stop pulse

      loader.style.opacity = '0';
      loader.style.transition = 'opacity 0.5s ease';

      setTimeout(() => {
        loader.style.display = 'none';
        document.body.classList.remove('loading'); // Re-enable scroll
      }, 500);

    }, 1000); // Reduce this delay if loader feels slow
  });