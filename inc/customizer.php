<?php
function cyip_customizer($wp_customize){
    $wp_customize -> add_section('cyip-home-sec', array(
        'title' => "Custom Home Settings"
    ));
    $wp_customize -> add_setting('cyip-home-image');
    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'cyip-home-image-control', array(
        "label" => "Home image",
        "section" => "cyip-home-sec",
        "settings" => "cyip-home-image",
        "width" => 900,
        "height" => 600
    )));
}

add_action('customize_register', 'cyip_customizer');