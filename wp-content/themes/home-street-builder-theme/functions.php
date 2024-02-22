<?php


// Import Theme CSS & JS file
function home_street_builders_files() {
    wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', null, '5.3.3', true  );

    wp_enqueue_style( 'roboto-font', '"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,400&display=swap' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style('home_builder_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'home_street_builders_files');

// Theme support
function home_street_builders_theme_features() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'home_street_builders_theme_features');

