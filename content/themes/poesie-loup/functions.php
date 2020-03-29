<?php

if (!function_exists('poesieloup_enqueue')) {

    function poesieloup_enqueue() {

        wp_enqueue_style(
            'main-style',
            get_theme_file_uri('public/css/style.css'),
            [],
            '20200316'
        );
        
    }
}

add_action('wp_enqueue_scripts', 'poesieloup_enqueue');

if (!function_exists('poesieloup_setup')) {
    function poesieloup_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
}

add_action('after_setup_theme', 'poesieloup_setup');