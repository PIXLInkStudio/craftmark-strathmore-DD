<div class="swiper mainSwiper strathmoreFirstSwiper">
    <div class="swiper-wrapper">
        <?php for ($i = 1; $i <= 2; $i++) { ?>
            <div class="swiper-slide floorplan">
                <a data-fancybox="gallery" href="/images/floorplans/strathmore/first/first-<?php echo $i; ?>.jpg"> 
                    <img src="/images/floorplans/strathmore/first/first-<?php echo $i; ?>.jpg" /> 
                </a>
            </div>
        <?php } ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
<div class="swiperThumbnailContainer">
    <div class="swiper swiperThumbnail strathmoreFirstThumbnail">
        <div class="swiper-wrapper">
            <?php for ($i = 1; $i <= 2; $i++) { ?>
                <div class="swiper-slide">
                    <img src="/images/floorplans/strathmore/first/first-1.jpg" />
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="swiper-button-next"><img src="/images/arrow-next.svg" alt=""></div>
    <div class="swiper-button-prev"><img src="/images/arrow-prev.svg" alt=""></div>
</div>