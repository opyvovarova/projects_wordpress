<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Start_It
 */

?>

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">

        <!-- Page Title -->
        <title><?php bloginfo( 'name' ) ?><?php  wp_title();?></title>

        <!-- Favicon and Touch Icons -->
        <link href="<?php bloginfo('template_directory')?>/inc/images/favicon.png)" rel="shortcut icon" type="image/png">

       <?php wp_head(); ?>

    </head>

    <body>
    
        <!-- Start Header -->
        <header id="header" class="header">
            <div class="navigation">
                <div class="container">
                    <nav id="flexmenu">
                        <div class="logo">
                            <?php the_custom_logo( );?>
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <?php 
                            wp_nav_menu( [
                                'menu' => 'Home Top Menu',
                                'menu_class' => 'main-menu'
                            ] );
                            ?>
                       
                        </div>
                    </nav>
                </div>
            </div>
        </header>