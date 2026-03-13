<?php
function kinch_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'kinch_setup');

function kinch_enqueue_assets() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap', [], null);
    wp_enqueue_style('kinch-main', get_stylesheet_directory_uri() . '/assets/main.css', ['google-fonts'], '1.0');
    wp_enqueue_script('kinch-nav', get_stylesheet_directory_uri() . '/assets/nav.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'kinch_enqueue_assets');
