<?php
add_action( 'wp_enqueue_scripts', 'style_theme');

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}

add_action( 'wp_footer', 'script_theme');

function script_theme() {
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}