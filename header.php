<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   
<header class="header-principale">
    <h1><?php bloginfo('name'); ?></h1>
    <p class="descrizione-sito"><?php bloginfo('description'); ?></p>
    
    <div class="barra-condizionale">
        <?php if ( is_home() ) : ?>
            <p>Benvenuto nella Home Page del mio Laboratorio!</p>
        <?php elseif ( is_page() ) : ?>
            <p>Ti trovi nella pagina: <? { the_title(); } ?></p>
        <?php else : ?>
            <p>Stai leggendo un articolo del blog</p>
        <?php endif; ?>
    </div>
</header>

<nav>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'menu-principale'
    ));
    ?>
</nav>
