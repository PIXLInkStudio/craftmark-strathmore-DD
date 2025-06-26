<div class="swiper mainSwiper siteplanSwiper">
    <div class="swiper-wrapper">
        <?php for ($i = 1; $i <= 7; $i++) { ?>
            <div class="swiper-slide floorplan">
                <a data-fancybox="gallery" href="/images/siteplan-area-map/image-<?php echo $i; ?>.jpg">
                    <img src="/images/siteplan-area-map/image-<?php echo $i; ?>.jpg" />
                </a>
            </div>
        <?php } ?>
    </div>
</div>
<div class="swiperThumbnailContainer">
    <div thumbsSlider="" class="swiper swiperThumbnail siteplanThumbnail">
        <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 7; $i++) { ?>
                <div class="swiper-slide">
                    <img src="/images/siteplan-area-map/image-<?php echo $i; ?>.jpg" />
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="swiper-button-next"><img src="/images/arrow-next.svg" alt=""></div>
    <div class="swiper-button-prev"><img src="/images/arrow-prev.svg" alt=""></div>
</div>