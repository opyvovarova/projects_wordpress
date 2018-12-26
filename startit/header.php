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
                            <!-- <a href="index.html"><img src="images/logo.png" alt="logo"></a> -->
                        </div>
                        <div class="nav-inner">
                            <div id="mobile-toggle" class="mobile-btn"></div>
                            <ul class="main-menu">
                                <li class="menu-item"><a class="active" href="index.html#slider">Home</a></li>
                                <li class="menu-item"><a href="index.html#services">Services</a></li>
                                <li class="menu-item"><a href="index.html#about">About Us</a></li>
                                <li class="menu-item"><a href="index.html#works">Portfolio</a></li>
                                <li class="menu-item"><a href="index.html#blog">Blog</a></li>
                                <li class="menu-item"><a href="index.html#contact">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>