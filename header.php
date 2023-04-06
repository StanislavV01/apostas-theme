<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apostas-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description') ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <header class="header">
        <div class="container">
            <div class="header__content"><a class="header__logo-link" href="<?php echo get_home_url()?>">
                    <?php 
			$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
			 ?>
                    <img src="<?php echo $custom_logo__url[0];?>" alt="logo"></a>
                <div class="header__actions"><button class="btn btn-nav"><span></span></button></div>
                <div class="header__nav">
                    <nav>
                        <?php 
                        wp_nav_menu( [
                            'menu'            => 'Main', 
                            'container'       => false, 
                            'menu_class'      => 'header__nav__list', 
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'items_wrap'      => '<ul class="header__nav__list">%3$s</ul>',
                            'depth'           => 1
                        ] );
                    ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>