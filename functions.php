<?php

function flavle_enqueue_styles()
{
    wp_enqueue_style(
        'flavle-style',
        get_stylesheet_uri()
    );
    wp_enqueue_script(
        'flavle-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'flavle_enqueue_styles');

function flavle_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'flavle_theme_setup');
