<?php

function load_css_files() {
    wp_enqueue_style('universipress_main_css', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'load_css_files');