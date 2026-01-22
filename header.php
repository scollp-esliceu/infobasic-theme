<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benvinguts a la meva web</title>
    <?php wp_head();?>
    <link rel="stylesheet" href="header.css">
    
</head>
<body <?php body_class()?>>
    <div class="header">
        <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'infobasic_main_menu',
                        'depth'             => 3,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'navbarNav',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
        </nav>
    </div>
