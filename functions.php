<?php
function medical_store_enqueue_assets() {
    wp_enqueue_style('medical-store-style', get_stylesheet_uri());
    wp_enqueue_script('medical-store-script', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'medical_store_enqueue_assets');
