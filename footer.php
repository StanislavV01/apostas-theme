<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apostas-theme
 */

?>

<footer class="footer">
    <div class="footer__content">
        <div class="footer__block img-b"><img src="<?php bloginfo('template_directory'); ?>/img/apostar.png"
                alt="Apostar">
            <img src="<?php bloginfo('template_directory'); ?>/img/gamble.svg" alt="gamecare">
            <img src="<?php bloginfo('template_directory'); ?>/img/gamecare.png" alt="gamecare"> <img
                src="<?php bloginfo('template_directory'); ?>/img/gov.svg" alt="gov.svg">
        </div>

        <div class="footer__block footer--bottom">
            <div class="container">
                <div class="footer__text">
                    <p><?php   echo get_theme_mod('footer_text-1') ?></p>
                    <p><?php   echo get_theme_mod('footer_text-2') ?></p>
                </div>
                <div class="footer__copyright">
                    <p> <?php   echo get_theme_mod('second_tagline') ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>