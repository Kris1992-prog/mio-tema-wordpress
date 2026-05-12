<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <p style="background: yellow;
text-align: center; margin: 0; padding: 10px;">
Benvenuti nel mio laboratorio Wordpress!</p>
<header style="background: orange; color: white; padding: 20px;">
    <h2>HEADER DI KRIS</h2>
</header>

<nav>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'menu-principale'
    ));
    ?>
</nav>
