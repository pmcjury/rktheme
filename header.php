<?php
/**
 * @package WordPress
 * @subpackage Robert Klara
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
        <link rel="SHORTCUT ICON" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fontsquirrel-fontfacekit/stylesheet.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <?php wp_enqueue_script('jquery'); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="page">
            <div id="wrap">
                <div id="hd">
                    <h1 class=""><a class="title" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
                    <p><?php bloginfo('description'); ?></p>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu-top', 'menu_id' => 'header-nav-top',  'menu_class' => 'nav', 'container' => ''   ) ); ?>
                    <div class="clear"></div>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu-bottom', 'menu_id' => 'header-nav-bottom', 'menu_class' => 'nav', 'container' => ''   ) ); ?>
                    <div class="clear"></div>
                </div><!-- #hd -->
