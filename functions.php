<?php

function flavle_enqueue_styles() {
    wp_enqueue_style(
        'flavle-style',
        get_stylesheet_uri()
    );
}

add_action('wp_enqueue_scripts', 'flavle_enqueue_styles');