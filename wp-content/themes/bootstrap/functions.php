<?php
// Register Nav Walker class_alias
require ('wp_bootstrap_navwalker.php');

// Theme support
function wp_theme_setup(){
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}
add_action('after_setup_theme', wp_theme_setup());

// Set excerpt length

function set_excerpt_length(){
    return 30;
}
add_filter('excerpt_length', 'set_excerpt_length');