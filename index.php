<?php include_once("includes/header.php"); ?>
<?php include_once("includes/screen_saver.php"); ?>
<section id="main">
    <div class="container-fluid"> 
        <div class="row"> 
            <!-- Left Column --> 
            <div id="leftSection" class="col-xl-5 col-lg-5 col-md-12">
                <!-- Digital Display - Switch Communities Navbar --> 
                <?php include_once("./includes/components/navbars/comm-navbar.php") ?>
                <!-- Welcome Header --> 
                <div id="welcome-header">
                    <div class="logo">
                        <a href="/"> 
                            <img src="/images/Logo-Occoquan.svg" alt="" class="img-fluid">
                        </a>
                    </div>
                   
                </div>
                <!-- Main Tab Content --> 
                <div class="main-content">
                    <div class="tab-content">
                        <div class="tab-pane fade in show active" id="welcome" role="tabpanel">
                            <?php include_once("./includes/components/welcome.php"); ?>
                        </div>
                        <div class="tab-pane fade" id="kenmore" role="tabpanel">
                            <?php include_once("./includes/components/floorplans/kenmore/kenmore.php"); ?>
                        </div>
                        <div class="tab-pane fade" id="maiden" role="tabpanel">
                            <?php include_once("./includes/components/floorplans/maiden/maiden.php"); ?>
                        </div>
                        <div class="tab-pane fade" id="biltmore" role="tabpanel">
                            <?php include_once("./includes/components/floorplans/biltmore/biltmore.php"); ?>
                        </div>
                        <div class="tab-pane fade" id="edgewater" role="tabpanel">
                            <?php include_once("./includes/components/floorplans/edgewater/edgewater.php"); ?>
                        </div>
                        <div class="tab-pane fade" id="features" role="tabpanel">
                            <?php include_once("./includes/components/features.php"); ?>
                        </div>
                        <div class="tab-pane fade" id="site-map" role="tabpanel">
                            <?php include_once("./includes/components/siteplan.php"); ?>
                        </div>
                        <div class="tab-pane fade" id="about-craftmark" role="tabpanel">
                            <?php include_once("./includes/components/about-craftmark.php"); ?>
                        </div>
                    </div>
                </div>
                <!-- Main Navigation --> 
                <div class="main-nav">
                    <ul class="nav dropup"> 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-left" id="floorplans" aria-haspopup="true" aria-expanded="true">Floor Plans<br>& Pictures<i class="fa-solid fa-chevron-up"></i></a>
                            <div class="dropdown-menu dropdown-primary" id="floorplans-dropdown-menu" aria-labelledby="floorplans">
                                <a class="dropdown-item swiper-control" href="#kenmore" data-toggle="tab" data-swiper="kenmore-gallery-swiper">The Kenmore at The Woods</a>
                                <a class="dropdown-item swiper-control" href="#maiden" data-toggle="tab" data-swiper="maiden-gallery-swiper">The Maiden at The Woods</a>
                                <a class="dropdown-item swiper-control" href="#biltmore" data-toggle="tab" data-swiper="biltmore-gallery-swiper">The Biltmore at The Woods</a>
                                <a class="dropdown-item swiper-control" href="#edgewater" data-toggle="tab" data-swiper="edgewater-gallery-swiper">The Edgewater at The Woods</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link swiper-control" data-toggle="tab" href="#features" data-swiper="gallery-swiper">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link swiper-control" data-toggle="tab" href="#site-map" data-swiper="siteplan-swiper">Site Map<br>& Area</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#about-craftmark" data-swiper="gallery-swiper">About<br>Craftmark</a>
                        </li>
                    </ul>
                </div>
                <!-- BG Images --> 
                <picture class="left-section-bg-left-flower d-none">
                    <source media="(max-width: 600px)" srcset="/images/Flower-1.png">
                    <source media="(min-width: 601px)" srcset="/images/Flower-1.png">
                    <img loading="lazy" decoding="async" src="/images/Flower-1.png" alt="field" width="202" height="247" aria-hidden="true">
                </picture>
                <picture class="left-section-bg-right-flower d-none">
                    <source media="(max-width: 600px)" srcset="/images/Flower-2.png">
                    <source media="(min-width: 601px)" srcset="/images/Flower-2.png">
                    <img loading="lazy" decoding="async" src="/images/Flower-2.png" alt="field" width="202" height="247" aria-hidden="true">
                </picture>
            </div>
            <!-- Right Column --> 
            <div id="rightSection" class="col-xl-7 col-lg-7 col-md-12">
                <div id="swiper-tab-content" class="tab-content p-0">
                    <!-- Welcome Gallery Swiper --> 
                    <div class="tab-pane p-0 fade in show active" id="gallery-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/gallery-swiper.php") ?>
                    </div>
                    <!--Kenmore Swipers --> 
                    <div class="tab-pane p-0 fade" id="kenmore-gallery-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/kenmore/kenmore-gallery-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="kenmore-ground-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/kenmore/kenmore-ground-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="kenmore-first-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/kenmore/kenmore-first-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="kenmore-second-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/kenmore/kenmore-second-swiper.php") ?>
                    </div>
                    <!-- Maiden Swipers --> 
                    <div class="tab-pane p-0 fade" id="maiden-gallery-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/maiden/maiden-gallery-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="maiden-ground-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/maiden/maiden-ground-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="maiden-first-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/maiden/maiden-first-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="maiden-second-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/maiden/maiden-second-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="maiden-third-swiper" role="tabpanel"> 
                        <?php include_once("./includes/components/swipers/maiden/maiden-third-swiper.php") ?>
                    </div>
                    <!-- Biltmore Swipers --> 
                    <div class="tab-pane p-0 fade" id="biltmore-gallery-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/biltmore/biltmore-gallery-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="biltmore-ground-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/biltmore/biltmore-ground-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="biltmore-first-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/biltmore/biltmore-first-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="biltmore-second-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/biltmore/biltmore-second-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="biltmore-third-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/biltmore/biltmore-third-swiper.php") ?>
                    </div>
                    <!-- Edgewater Swipers --> 
                    <div class="tab-pane p-0 fade" id="edgewater-gallery-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/edgewater/edgewater-gallery-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="edgewater-ground-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/edgewater/edgewater-ground-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="edgewater-first-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/edgewater/edgewater-first-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="edgewater-second-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/edgewater/edgewater-second-swiper.php") ?>
                    </div>
                    <div class="tab-pane p-0 fade" id="edgewater-third-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/edgewater/edgewater-third-swiper.php") ?>
                    </div>
                    <!-- Siteplan Swiper--> 
                    <div class="tab-pane p-0 fade" id="siteplan-swiper" role="tabpanel">
                        <?php include_once("./includes/components/swipers/siteplan-swiper.php") ?>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</section>

<?php include_once("includes/footer.php"); ?>