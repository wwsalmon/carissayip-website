<?php get_header();

$home = false;

if (is_front_page()) {
    $home = true;

    ?>

    <div class='top-container'>
        <div class="top-container-inner" data-tilt data-tilt-max="5" data-tilt-scale="1.1" data-tilt-gyroscope="true">
            <div class="hero-text" style="transform: translateZ(-100px);">
                <span id="hero2">International Master<br/></span>
                <span id="hero1">Carissa Yip</span>
            </div>
            <div class="main-item" style="transform: translateZ(-40px);">
                <img src="<?php
                function cyip_get_home_image(){
                    $imageID = get_theme_mod("cyip-home-image", -1);
                    if ($imageID > -1){
                        return wp_get_attachment_url($imageID);
                    }
                    else{
                        return get_template_directory_uri() . "/img/csmonitor-cyip.jpg";
                    }
                }
                echo cyip_get_home_image();
                ?>">
            </div>
            <div class='banner-item' id='item1'>
                <div class="banner-item-back"></div>
                <div class='banner-item-inner' style="transform: translateZ(80px);">
                    <div class='banner-item-left'><span>#1</span></div>
                    <div class='banner-item-right'>
                        <span class='banner-main'>Rated U18 American<br/>Female Chess Player<br/></span>
                        <!--                    <span class='banner-small'>Since September 2019</span>-->
                    </div>
                </div>
            </div>
            <div class='banner-item' id='item2'>
                <div class="banner-item-back"></div>
                <div class='banner-item-inner' style="transform: translateZ(20px);">
                    <div class='banner-item-left'><span>#3</span></div>
                    <div class='banner-item-right'>
                        <span class='banner-main'>Rated American<br/>Female Chess Player<br/></span>
                        <!--                    <span class='banner-small'>Since September 2019</span>-->
                    </div>
                </div>
            </div>
            <div class='banner-item' id='item3'>
                <div class="banner-item-back"></div>
                <div class='banner-item-inner' style="transform: translateZ(40px);">
                    <div class='banner-item-right'>
                        <span class='banner-main'>Youngest Female Ever to<br/>Beat a Grandmaster<br/></span>
                        <span class='banner-small'>August 2014 v. Ivanov, at the age of 10</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo get_template_directory_uri() ?>/js/vanilla-tilt.min.js"></script>

    <script>

        allBanners = document.getElementsByClassName("banner-item");
        for (i = 0; i < allBanners.length; i++) {
            banner = allBanners.item(i);
            z1 = +banner.querySelector(".banner-item-inner").style.transform.replace(/[^\d.]/g, '');
            banner.querySelector(".banner-item-back").setAttribute("style", "transform: translateZ(" + (z1 - 5) + "px);");
        }

        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { // from https://stackoverflow.com/questions/22680448/if-mobile-disable-certain-scripts/22680543
            document.querySelector(".top-container-inner").vanillaTilt.destroy();
        }
    </script>

    <?php
}
    while ( have_posts() ) : the_post();
    if (get_the_title() == "Chess Against COVID"){
        $cac = true;
        ?>
        <div class="covid-back"></div>
        <?php
    }
    ?>
    <div class="container <?php if ($cac) echo 'cac' ?>">
        <?php if (!$home){ ?><h1><?php the_title(); ?></h1><?php } ?>
        <?php
            the_content();
        endwhile; ?>
    </div>

<?php

get_footer(); ?>