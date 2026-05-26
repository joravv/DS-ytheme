<?php
// function add_theme_scripts(){
// wp_enqueue_style("style",get_stylesheet_url());


// wp_enqueue_style("style",get_stylesheet_url());

// wp_enqueue_style("style",get_stylesheet_url());
// }

add_theme_support('post-thumbnails');

function thembes_enqueue_styles(){
    wp_enqueue_style("bootstrap", get_template_directory_uri(). './css/bootstrap.min.css');
        wp_enqueue_style("core", get_template_directory_uri(). './style.css');
}
add_action('wp_enqueue_scripts', 'thembes_enqueue_styles');
function theme_scripts(){
    wp_enqueue_script("bootstrap", get_template_uri(). './js/bootstrap.bundle.min.js');
array(("jquery"));

add_action('wp_enqueue_scripts', 'theme_scripts');
}



?>