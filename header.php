<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <p 
class="barra-benvenuto">Benvenuti nel mio laboratorio WordPress!</p>
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
