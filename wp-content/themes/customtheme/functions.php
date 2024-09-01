<?php

//* load tailwindcss
function load_tailwindcss()
{
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/styles/tailwind_output.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'load_tailwindcss');

//* Theme options
add_theme_support('menus');

//* Menus
register_nav_menus([
    "top-menu" => "Top Menu Location",
    "mobile-menu" => "Mobile Menu Location",
]);
