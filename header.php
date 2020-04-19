<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi' name='viewport'/>
    <title><?php echo wp_get_document_title(); ?></title>
<?php
date_default_timezone_set("America/New_York");
wp_head();
?>

</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <a href="<?php echo get_home_url() ?>">
            <div class="navbar-logo">
                <div class="logo-top"><span>International Master</span></div>
                <div class="logo-bottom"><span>Carissa Yip</span></div>
            </div>
        </a>
        <div id="hamburger"><i class="fas fa-bars"></i></div>
        <?php wp_nav_menu(array('theme_location' => 'primary')) ?>
    </div>
</div>
<script>
    document.getElementById('hamburger').addEventListener("click",function(){
        document.querySelector('.menu-navbar-container').classList.toggle("open");
    });
</script>