import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".slider")) {
    const swiper = new Swiper(".swiper", {
      modules: [Navigation, Pagination],
      slidesPerView: 1,
      spaceBetween: 15,
      // Responsive breakpoints
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
        1200: {
          slidesPerView: 4,
        },
      },
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
      },
    });
  }
});
