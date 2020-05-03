<?php ?>
<div class='banner-item' id='item<?php echo $bannernum ?>'>
    <div class="banner-item-back"></div>
    <div class='banner-item-inner' style="transform: translateZ(<?php echo $bannerdepth ?>px);">
        <?php if (get_theme_mod("cyip-home-banner".$bannernum."-numcheck", false)): ?>
                <div class='banner-item-left'><span>#<?php echo get_theme_mod("cyip-home-banner".$bannernum."-num", 1) ?></span></div>
        <?php endif; ?>
        <div class='banner-item-right'>
            <span class='banner-main'><?php echo get_theme_mod("cyip-home-banner".$bannernum."-maintext", "Rated U18 American<br/>Female Chess Player<br/>") ?></span>
            <?php if (get_theme_mod("cyip-home-banner".$bannernum."-smallcheck", false)): ?>
            <span class='banner-small'><?php echo get_theme_mod("cyip-home-banner".$bannernum."-smalltext", "Since September 2019") ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>
