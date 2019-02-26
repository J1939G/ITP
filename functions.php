<?php 

function wpit_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wpit_resources');

register_nav_menus(array(
    'start' => __( 'Home menu'),
    'page' => __('Page menu')
));

add_filter('show_admin_bar', '__return_false');

?>