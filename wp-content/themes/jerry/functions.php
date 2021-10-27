<?php
add_action( 'wp_enqueue_scripts', 'style_theme');
add_action( 'wp_footer', 'script_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
    register_nav_menu( 'bottom', 'Bottom Menu' );
}

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
}

function script_theme() {
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js');
}