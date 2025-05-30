// KENMORE SWIPERS
// GALLERY
var kenmoreGalleryThumbnail = new Swiper(".kenmoreGalleryThumbnail", {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var kenmoreGallerySwiper = new Swiper(".kenmoreGallerySwiper", {
    thumbs: {
      swiper: kenmoreGalleryThumbnail,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

// GROUND FLOOR
  var kenmoreGroundThumbnail = new Swiper(".kenmoreGroundThumbnail", {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var kenmoreGroundSwiper = new Swiper(".kenmoreGroundSwiper", {
    thumbs: {
      swiper: kenmoreGroundThumbnail,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });


  // FIRST FLOOR
  var kenmoreFirstThumbnail = new Swiper(".kenmoreFirstThumbnail", {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var kenmoreFirstSwiper = new Swiper(".kenmoreFirstSwiper", {
    thumbs: {
      swiper: kenmoreFirstThumbnail,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // SECOND FLOOR
  var kenmoreSecondThumbnail = new Swiper(".kenmoreSecondThumbnail", {
    spaceBetween: 0,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var kenmoreSecondSwiper = new Swiper(".kenmoreSecondSwiper", {
    thumbs: {
      swiper: kenmoreSecondThumbnail,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });