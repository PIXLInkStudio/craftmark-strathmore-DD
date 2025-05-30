$(document).ready(function () {
  // GALLERY SWIPERS
  var galleryTownhomeThumbnail = new Swiper(".galleryThumbnail", {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var galleryTownhomeSwiper = new Swiper(".gallerySwiper", {
    thumbs: {
      swiper: galleryTownhomeThumbnail,
    },
  });


  // Biltmore Swiper
  var biltmoreThumbnail = new Swiper(".biltmoreThumbnail", {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var biltmoreSwiper = new Swiper(".biltmoreSwiper", {
    thumbs: {
      swiper: biltmoreThumbnail,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  // Siteplan Swiper
  var siteplanThumbnail = new Swiper(".siteplanThumbnail", {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var siteplanSwiper = new Swiper(".siteplanSwiper", {
    thumbs: {
      swiper: siteplanThumbnail,
    },
  });

  $(".swiper-control").on("click", function (e) {
    e.preventDefault();
    $("#swiper-tab-content .tab-pane").removeClass("in show active");
    var swiperId = $(this).data("swiper");
    $(`#${swiperId}`).addClass("in show active");
  });

  // Screen Saver
  $(".screen_saver").vegas({
    delay: 7000,
    animation: "random",
    transition: [
      "slideLeft",
      "swirlRight2",
      "swirlLeft2",
      "zoomOut2",
      "slideDown2",
      "slideLeft2",
      "slideRight2",
      "slideUp",
      "slideRight",
      "slideUp2",
      "slideDown",
      "zoomIn",
      "swirlLeft",
    ],
    loop: "loop",
    autoplay: "true",
    slides: [
      { src: "/images/screen-saver/screen-saver-1.jpg" },
      { src: "/images/screen-saver/screen-saver-2.jpg" },
      { src: "/images/screen-saver/screen-saver-3.jpg" },
      { src: "/images/screen-saver/screen-saver-4.jpg" },
      { src: "/images/screen-saver/screen-saver-5.jpg" },
      { src: "/images/screen-saver/screen-saver-6.jpg" },
      { src: "/images/screen-saver/screen-saver-7.jpg" },
      { src: "/images/screen-saver/screen-saver-8.jpg" },
      { src: "/images/screen-saver/screen-saver-9.jpg" },
      { src: "/images/screen-saver/screen-saver-10.jpg" },
      { src: "/images/screen-saver/screen-saver-11.jpg" },
      { src: "/images/screen-saver/screen-saver-12.jpg" },
      { src: "/images/screen-saver/screen-saver-13.jpg" },
      { src: "/images/screen-saver/screen-saver-14.jpg" },
      { src: "/images/screen-saver/screen-saver-15.jpg" },
      { src: "/images/screen-saver/screen-saver-16.jpg" },
      { src: "/images/screen-saver/screen-saver-17.jpg" },
      { src: "/images/screen-saver/screen-saver-18.jpg" },
      { src: "/images/screen-saver/screen-saver-19.jpg" },
      { src: "/images/screen-saver/screen-saver-20.jpg" },
      { src: "/images/screen-saver/screen-saver-21.jpg" },
      { src: "/images/screen-saver/screen-saver-22.jpg" },
      { src: "/images/screen-saver/screen-saver-23.jpg" },
      { src: "/images/screen-saver/screen-saver-24.jpg" },
      { src: "/images/screen-saver/screen-saver-25.jpg" },
      { src: "/images/screen-saver/screen-saver-26.jpg" },
      { src: "/images/screen-saver/screen-saver-27.jpg" },
      { src: "/images/screen-saver/screen-saver-28.jpg" },
      { src: "/images/screen-saver/screen-saver-29.jpg" },
      { src: "/images/screen-saver/screen-saver-30.jpg" },
      { src: "/images/screen-saver/screen-saver-31.jpg" },
      { src: "/images/screen-saver/screen-saver-32.jpg" },
      { src: "/images/screen-saver/screen-saver-33.jpg" },
      { src: "/images/screen-saver/screen-saver-34.jpg" },
      { src: "/images/screen-saver/screen-saver-35.jpg" },
      { src: "/images/screen-saver/screen-saver-36.jpg" },
      { src: "/images/screen-saver/screen-saver-37.jpg" },
      { src: "/images/screen-saver/screen-saver-38.jpg" },
      { src: "/images/screen-saver/screen-saver-39.jpg" },
      { src: "/images/screen-saver/screen-saver-40.jpg" },
      { src: "/images/screen-saver/screen-saver-41.jpg" },
      { src: "/images/screen-saver/screen-saver-42.jpg" },
      { src: "/images/screen-saver/screen-saver-43.jpg" },
      { src: "/images/screen-saver/screen-saver-44.jpg" },
      { src: "/images/screen-saver/screen-saver-45.jpg" },
      { src: "/images/screen-saver/screen-saver-46.jpg" },
      { src: "/images/screen-saver/screen-saver-47.jpg" },
      { src: "/images/screen-saver/screen-saver-48.jpg" },
      { src: "/images/screen-saver/screen-saver-49.jpg" },
      { src: "/images/screen-saver/screen-saver-50.jpg" },
      { src: "/images/screen-saver/screen-saver-51.jpg" },
      { src: "/images/screen-saver/screen-saver-52.jpg" },
      { src: "/images/screen-saver/screen-saver-53.jpg" },
      { src: "/images/screen-saver/screen-saver-54.jpg" },
      { src: "/images/screen-saver/screen-saver-55.jpg" },
      { src: "/images/screen-saver/screen-saver-56.jpg" },
      { src: "/images/screen-saver/screen-saver-57.jpg" },
      { src: "/images/screen-saver/screen-saver-58.jpg" },
      { src: "/images/screen-saver/screen-saver-59.jpg" },
      { src: "/images/screen-saver/screen-saver-60.jpg" },
      { src: "/images/screen-saver/screen-saver-61.jpg" },
      { src: "/images/screen-saver/screen-saver-62.jpg" },
      { src: "/images/screen-saver/screen-saver-63.jpg" },
      { src: "/images/screen-saver/screen-saver-64.jpg" },
    ],
  });

  // Screen Saver Close
  $("#screen_saver_wrap").click(function () {
    $(this).toggleClass("d-none d-block");
  });

  // Reload page if there is no movement
(function(seconds) {
  var refresh,       
      intvrefresh = function() {
          clearInterval(refresh);
          refresh = setTimeout(function() {
              $('#screen_saver_wrap').toggleClass('d-none d-block').delay(1);
          }, seconds * 1000);
      };
  
  $(document).on('keypress click', function() { intvrefresh() });
  intvrefresh();
  
  }(300)); //300 define here seconds

}); /* Document Ready End */
