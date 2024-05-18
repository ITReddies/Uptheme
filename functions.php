<?php
function enqueue_custom_styles() {

    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css", array(), '1.0.0');
    wp_enqueue_style('custom css', get_template_directory_uri( ) . "/style.css", array(), '1.0.0');

}


function enqueue_custom_js() {
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/custom-scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js');


function menus(){

$locations = array( 
    
    'primary' => "desktop primary",
    'footer-menu' => 'Footer2'

);

register_nav_menus($locations);

}

add_action('init', 'menus');

add_action('wp_head', 'wpml_floating_language_switcher'); 
  
function wpml_floating_language_switcher() { 
   echo '<div class="wpml-floating-language-switcher">';
       do_action('wpml_add_language_selector');
   echo '</div>'; 
}
