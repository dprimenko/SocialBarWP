<?php

function social_setup() {
    require_once('theme_setup_data.php');
}

add_action( 'after_setup_theme', 'spotlight_setup' ); 


function load_scripts() {
    wp_enqueue_style('materialicons', 'https://cdn.materialdesignicons.com/1.8.36/css/materialdesignicons.min.css');
}
add_action('wp_enqueue_scripts', 'load_scripts');

?>