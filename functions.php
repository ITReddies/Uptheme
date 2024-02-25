<?php
function enqueue_custom_styles() {

    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '1.0.0');
    wp_enqueue_style('custom css', get_template_directory_uri( ) . "/style.css", array(), '1.0.0');

}

function enqueue_custom_scripts() {
    if (is_front_page()) {
        wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/custom-scripts.js', array(), null, true);
    }
}

function enqueue_custom_scripts_page() {
    if (is_page()) {
        wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/custom-scripts.js', array(), null, true);
    }
}

add_action( 'wp_head', 'enqueue_custom_scripts' );
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts_page');

function menus(){

$locations = array( 
    
    'primary' => "desktop primary",

);

register_nav_menus($locations);

}

add_action('init', 'menus');

