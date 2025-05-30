<div class="swiper mainSwiper kenmoreGallerySwiper">
    <div class="swiper-wrapper">
        <?php for ($i = 1; $i <= 32; $i++) { ?>
            <div class="swiper-slide floorplan">
                <a data-fancybox="gallery" href="/images/floorplans/kenmore/gallery/gallery-<?php echo $i; ?>.jpg"> 
                    <img src="/images/floorplans/kenmore/gallery/gallery-<?php echo $i; ?>.jpg" /> 
                </a>
            </div>
        <?php } ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div class="swiperThumbnailContainer">
    <div class="swiper swiperThumbnail kenmoreGalleryThumbnail">
        <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 32; $i++) { ?>
                <div class="swiper-slide">
                    <img src="/images/floorplans/kenmore/gallery/gallery-<?php echo $i; ?>.jpg" />
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="swiper-button-next"><img src="/images/arrow-next.svg" alt=""></div>
    <div class="swiper-button-prev"><img src="/images/arrow-prev.svg" alt=""></div>
</div>