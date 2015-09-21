
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Back_Tax_Relief
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- BOOTSTRAP CORE CSS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- FONT AWESOME ICONS -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
    <!-- END BOOTSTRAP CORE CSS

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'backtaxrelief' ); ?></a>
    <!-- START HEADER -->
    <header>
        <!-- START MAIN NAV -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <!-- START CONTAINER -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>

                <?php
                wp_nav_menu( array(

                    'theme_location'  => 'primary',
                    'container'       => 'nav',
                    'container_class' => 'nav-collapse collapse',
                    'menu_class'      => 'nav navbar-nav navbar-right'

                ));
                ?>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!-- END CONTAINER -->
        </nav>
        <!-- END MAIN NAV -->
    </header>
    <!-- END HEADER -->

    <div id="content" class="site-content">
