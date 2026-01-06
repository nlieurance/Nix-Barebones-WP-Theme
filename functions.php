<?php

function unicorn(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','unicorn');

function nix_theme_enqueue_styles() {
    wp_enqueue_style( 'nix-barebones-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'nix_theme_enqueue_styles' );

