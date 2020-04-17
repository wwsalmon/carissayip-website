<?php

require('inc/register-menus.php');

require('inc/helper-functions.php');

function cyip_script_enqueue()
{
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/master.scss', array(), null, 'all');
//    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/section-dropdown.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'cyip_script_enqueue');
