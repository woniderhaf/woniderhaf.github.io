const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    grabCursor: true,
    speed: 1000,
    disableOnInteraction: false,


  
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    autoplay: {
      delay: 5000,
    },
});

const swiperMain = new Swiper('.swiperMain', {
    // Optional parameters
    direction: 'horizontal',
    effect: 'slide',
    loop: true,
    grabCursor: true,
    speed: 1000,
    disableOnInteraction: false,


  
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    autoplay: {
      delay: 5000,
    },
});
