<?php

function mytheme_theme_uspport() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mytheme_theme_uspport');


function mytheme_menus() {

    $locations = [
        'primary' => "Desktop prmiary Left Sidebar",
        'footer' => "Footer Menu Items"
    ];

    register_nav_menus( $locations );
}

add_action("init", 'mytheme_menus'); 

function mytheme_enqueue_styles() {
    
    
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("mytheme-stylesheet", get_template_directory_uri() . "/style.css", array("mytheme-bootstrap"), $version, 'all');
    
    wp_enqueue_style("mytheme-bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    
    wp_enqueue_style("mytheme-fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function mytheme_enqueue_scripts() {

    $version = wp_get_theme()->get("Version");
    wp_enqueue_script( 'mytheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    
    wp_enqueue_script( 'mytheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    
    wp_enqueue_script( 'mytheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    
    wp_enqueue_script( 'mytheme-script', get_template_directory_uri() . "/assets/js/main.js", array(), $version, true);
}

add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');

?>