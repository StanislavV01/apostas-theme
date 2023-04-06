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
    <style type="text/css">
    @import url(https://fonts.googleapis.com/css2?family=Asap:wght@300;400;500;600&family=Climate+Crisis&display=swap);

    html {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        height: 100%;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    *,
    ::after,
    ::before {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    body {
        height: 100%;
        font-family: Asap, sans-serif;
        font-weight: 300;
        font-size: 14px;
        overflow-x: hidden;
        background: #0d2329;
        margin: 0
    }

    a {
        text-decoration: none;
        background-color: transparent
    }

    main {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        display: block
    }

    .container {
        margin: 0 auto;
        padding: 0 20px;
        width: 100%;
        overflow: hidden;
        max-width: 1920px
    }

    @media (min-width:1200px) {
        body {
            font-size: 32px
        }

        .container {
            padding: 0 60px
        }
    }

    .btn {
        outline: 0;
        border: none
    }

    @media (min-width:480px) {
        h1 {
            font-size: 62px
        }
    }

    @media (min-width:768px) {
        h1 {
            font-size: 94px
        }
    }

    @media (min-width:1200px) {
        h1 {
            font-size: 150px
        }
    }

    @media (min-width:1600px) {
        h1 {
            font-size: 200px
        }
    }

    @media (min-width:1800px) {
        h1 {
            font-size: 250px
        }
    }

    @media (min-width:1200px) {
        .header__content {
            position: relative;
            z-index: 10
        }
    }

    h1 {
        font-family: "Climate Crisis";
        font-weight: 400;
        color: #b6f85b;
        text-transform: uppercase;
        font-style: normal;
        text-align: right;
        line-height: 132%;
        font-size: 2em;
        margin: .67em 0
    }

    img {
        max-width: 100%;
        border-style: none
    }

    button {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0
    }

    button {
        overflow: visible
    }

    button {
        text-transform: none
    }

    button {
        -webkit-appearance: button
    }

    button::-moz-focus-inner {
        border-style: none;
        padding: 0
    }

    button:-moz-focusring {
        outline: ButtonText dotted 1px
    }

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit
    }

    .header {
        font-weight: 600;
        font-size: 20px;
        line-height: 100%
    }

    .header__content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 48px 0;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .header__logo-link img {
        width: 55px;
        height: 41px
    }

    .header__actions {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .header__nav {
        height: 0;
        display: none
    }

    .header__nav__list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin: 0;
        padding: 0;
        list-style: none
    }

    .header__nav li {
        position: relative;
        margin-top: 42px
    }

    @media (min-width:1200px) {
        .header__nav__list {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-pack: distribute;
            justify-content: space-around;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .header__nav li {
            margin: 0 20px;
            font-size: 17px
        }

        .header__nav li:last-child::before {
            display: none
        }
    }

    @media (min-width:1600px) {
        .header__nav li {
            font-size: 20px;
            margin: 0 33px
        }
    }

    .header__nav li::after {
        content: "";
        position: absolute;
        display: block;
        width: 2px;
        height: 23px;
        background-color: #b6f85b;
        left: -20px;
        top: 0
    }

    @media (min-width:1200px) {
        .header__nav li::after {
            display: none
        }
    }

    .header__nav li::before {
        content: "";
        position: absolute;
        display: block;
        width: 2px;
        height: 23px;
        background-color: #b6f85b;
        right: -20px;
        top: 0
    }

    .header__nav li a {
        text-transform: uppercase;
        color: #fff
    }

    .btn-nav {
        width: 36px;
        height: 36px;
        background-color: #b6f85b;
        padding: 0 4.5px
    }

    @media (min-width:768px) {
        .header__logo-link img {
            width: 118px;
            height: 90px
        }

        .btn-nav {
            width: 80px;
            height: 80px
        }
    }

    .btn-nav span {
        position: relative;
        background-color: #0d2329;
        width: 100%;
        height: 3px;
        display: block
    }

    .btn-nav span::after {
        content: "";
        position: absolute;
        top: -4px;
        background-color: #0d2329;
        width: 100%;
        height: 3px;
        display: block
    }

    @media (min-width:768px) {
        .btn-nav span {
            height: 6px
        }

        .btn-nav span::after {
            top: -15px;
            height: 6px
        }
    }

    .btn-nav span::before {
        content: "";
        position: absolute;
        top: 4px;
        background-color: #0d2329;
        width: 100%;
        height: 3px;
        display: block
    }

    @media (min-width:768px) {
        .btn-nav span::before {
            height: 6px;
            top: 15px
        }
    }

    .welcome__heading {
        padding: 50px 0
    }

    .welcome__heading h1 {
        font-family: "Climate Crisis";
        font-weight: 400;
        color: #b6f85b;
        text-transform: uppercase;
        font-style: normal;
        font-size: 44px;
        text-align: right;
        line-height: 132%
    }

    @media (min-width:480px) {
        .welcome__heading h1 {
            font-size: 62px
        }
    }

    @media (min-width:768px) {
        .welcome__heading h1 {
            font-size: 94px
        }
    }

    @media (min-width:1200px) {
        .header__nav li::before {
            background-color: #0d2329;
            right: -30px
        }

        .header__nav li a {
            color: #0d2329
        }

        .welcome__heading h1 {
            font-size: 150px
        }
    }

    @media (min-width:1600px) {
        .welcome__heading h1 {
            font-size: 200px
        }
    }

    @media (min-width:1800px) {
        .welcome__heading h1 {
            font-size: 250px
        }
    }

    .welcome__subtitle {
        font-weight: 400;
        font-size: 16px;
        color: #fff;
        padding: 12px 0;
        width: 60%;
        line-height: 114%
    }

    .welcome__list {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 30px 0;
        position: relative
    }

    @media (min-width:768px) {
        .welcome__subtitle {
            font-size: 26px
        }
    }

    .welcome__list::after {
        content: url(./img/arrow.svg);
        position: absolute;
        left: 50%;
        bottom: 0
    }

    @media (min-width:1200px) {
        .welcome__subtitle {
            font-size: 36px
        }

        .welcome__list {
            padding: 200px 0
        }

        .welcome__list::after {
            height: 36px
        }
    }
    </style>
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