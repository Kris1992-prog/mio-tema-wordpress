<?php

function mio_tema_scripts() {
    wp_enqueue_style('kris-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mio_tema_scripts');

function registra_menu() {
    register_nav_menus(array(
        'menu-principale' => 'Menu Principale'
    ));
}

add_action('after_setup_theme', 'registra_menu');

function mio_tema_registra_sidebar() {
    register_sidebar( array(
        'name'          => 'Sidebar Principale',
        'id'            => 'sidebar-principale',
        'before_widget' => '<div class="widget-box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mio_tema_registra_sidebar' );
