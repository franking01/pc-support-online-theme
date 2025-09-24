<?php
function pc_support_enqueue_scripts() {
    wp_enqueue_style('pc-support-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'pc_support_enqueue_scripts');

function pc_support_register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'pc_support_register_menus');
?>
