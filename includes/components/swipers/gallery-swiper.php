<div class="swiper mainSwiper gallerySwiper">
    <div class="swiper-wrapper">
        <?php for ($i = 1; $i <= 38; $i++) { ?>
            <div class="swiper-slide">
                <a data-fancybox="gallery" href="/images/gallery/gallery-<?php echo $i; ?>.jpg">
                    <img src="/images/gallery/gallery-<?php echo $i; ?>.jpg" />
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<div class="swiperThumbnailContainer">
    <div thumbsSlider="" class="swiper swiperThumbnail galleryThumbnail">
        <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 38; $i++) { ?>
                <div class="swiper-slide">
                    <img src="/images/gallery/gallery-<?php echo $i; ?>.jpg" />
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="swiper-button-next"><img src="/images/arrow-next.svg" alt=""></div>
    <div class="swiper-button-prev"><img src="/images/arrow-prev.svg" alt=""></div>
</div>