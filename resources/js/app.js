import './bootstrap';
import Swiper from 'swiper';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



document.addEventListener('DOMContentLoaded', function() {
  const mySwiper = new Swiper('.swiper-container', {
    // Add your swiper options here
    // For example:
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
});

