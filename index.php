<?php get_header(); ?>

<div class='top-container' id='parallax-scene' data-tilt data-tilt-max="5">
    <div class='banner-item' style="top: 70%; right: 30%;">
        <div class="banner-item-back"></div>
        <div class='banner-item-inner' style="transform: translateZ(60px);">
            <div class='banner-item-left'><span>#1</span></div>
            <div class='banner-item-right'>
                <span class='banner-main'>Rated American<br />Female Chess Player<br /></span>
                <span class='banner-small'>Since September 2019</span>
            </div>
        </div>
    </div>
    <div class='banner-item' style="top: 30%; left: 30%;">
        <div class="banner-item-back"></div>
        <div class='banner-item-inner' style="transform: translateZ(40px);">
            <div class='banner-item-left'><span>#1</span></div>
            <div class='banner-item-right'>
                <span class='banner-main'>Rated American<br />Female Chess Player<br /></span>
                <span class='banner-small'>Since September 2019</span>
            </div>
        </div>
    </div>
    <div class='banner-item' style="top: 10%; right: 20%;">
        <div class="banner-item-back"></div>
        <div class='banner-item-inner' style="transform: translateZ(20px);">
            <div class='banner-item-right'>
                <span class='banner-main'>Youngest Female Ever to<br/>Beat a Grandmaster<br /></span>
                <span class='banner-small'>August 2014 v. Ivanov, at the age of 10</span>
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
        banner.querySelector(".banner-item-back").setAttribute("style","transform: translateZ(" + (z1 - 5) + "px);");
        console.log(banner,z1);
    }
</script>

<?php get_footer(); ?>