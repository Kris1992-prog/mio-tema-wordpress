<?php

function mio_tema_scripts() {
    wp_enqueue_style('kris-style', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'mio_tema_scripts');

function registra_menu() {
    register_nav_menus(array(
        'menu-principale' => 'Menu Principale'
    ));
}

add_action('after_setup_theme', 'registra_menu');
