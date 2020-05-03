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
    
    // banner 1
    
    $wp_customize -> add_setting('cyip-home-banner1-num');
    $wp_customize -> add_setting('cyip-home-banner1-maintext');
    $wp_customize -> add_setting('cyip-home-banner1-smalltext');
    $wp_customize -> add_setting('cyip-home-banner1-numcheck');
    $wp_customize -> add_setting('cyip-home-banner1-smallcheck');
    $wp_customize->add_control('cyip-home-banner1-maintext-control', array(
        'label' => 'main text for banner 1',
        'type' => 'string',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner1-maintext'
    ));
    $wp_customize->add_control('cyip-home-banner1-smalltext-control', array(
        'label' => 'small text for banner 1',
        'type' => 'string',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner1-smalltext'
    ));
    $wp_customize->add_control('cyip-home-banner1-num-control', array(
        'label' => 'number for banner 1',
        'type' => 'number',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner1-num'
    ));
    $wp_customize->add_control('cyip-home-banner1-numcheck-control', array(
        'label' => 'show number for banner 1?',
        'type' => 'checkbox',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner1-numcheck'
    ));
    $wp_customize->add_control('cyip-home-banner1-smallcheck-control', array(
        'label' => 'show small text for banner 1?',
        'type' => 'checkbox',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner1-smallcheck'
    ));

    // banner 2

    $wp_customize -> add_setting('cyip-home-banner2-num');
    $wp_customize -> add_setting('cyip-home-banner2-maintext');
    $wp_customize -> add_setting('cyip-home-banner2-smalltext');
    $wp_customize -> add_setting('cyip-home-banner2-numcheck');
    $wp_customize -> add_setting('cyip-home-banner2-smallcheck');
    $wp_customize->add_control('cyip-home-banner2-maintext-control', array(
        'label' => 'main text for banner 2',
        'type' => 'string',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner2-maintext'
    ));
    $wp_customize->add_control('cyip-home-banner2-smalltext-control', array(
        'label' => 'small text for banner 2',
        'type' => 'string',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner2-smalltext'
    ));
    $wp_customize->add_control('cyip-home-banner2-num-control', array(
        'label' => 'number for banner 2',
        'type' => 'number',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner2-num'
    ));
    $wp_customize->add_control('cyip-home-banner2-numcheck-control', array(
        'label' => 'show number for banner 2?',
        'type' => 'checkbox',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner2-numcheck'
    ));
    $wp_customize->add_control('cyip-home-banner2-smallcheck-control', array(
        'label' => 'show small text for banner 2?',
        'type' => 'checkbox',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner2-smallcheck'
    ));

    // banner 3

    $wp_customize -> add_setting('cyip-home-banner3-num');
    $wp_customize -> add_setting('cyip-home-banner3-maintext');
    $wp_customize -> add_setting('cyip-home-banner3-smalltext');
    $wp_customize -> add_setting('cyip-home-banner3-numcheck');
    $wp_customize -> add_setting('cyip-home-banner3-smallcheck');
    $wp_customize->add_control('cyip-home-banner3-maintext-control', array(
        'label' => 'main text for banner 3',
        'type' => 'string',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner3-maintext'
    ));
    $wp_customize->add_control('cyip-home-banner3-smalltext-control', array(
        'label' => 'small text for banner 3',
        'type' => 'string',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner3-smalltext'
    ));
    $wp_customize->add_control('cyip-home-banner3-num-control', array(
        'label' => 'number for banner 3',
        'type' => 'number',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner3-num'
    ));
    $wp_customize->add_control('cyip-home-banner3-numcheck-control', array(
        'label' => 'show number for banner 3?',
        'type' => 'checkbox',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner3-numcheck'
    ));
    $wp_customize->add_control('cyip-home-banner3-smallcheck-control', array(
        'label' => 'show small text for banner 3?',
        'type' => 'checkbox',
        'section' => 'cyip-home-sec',
        'settings' => 'cyip-home-banner3-smallcheck'
    ));
}

add_action('customize_register', 'cyip_customizer');