<?php
function cyip_register_menus()
{
    add_theme_support('menus');
    register_nav_menus(array(
        'primary' => __('Home Navigation')
    ));
}

add_action('init', 'cyip_register_menus');