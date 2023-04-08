<?php
/**
 * Template Name: Front Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package apostas-theme
 */

get_header();
?>

<main>
    <section class="welcome">
        <div class="container">
            <div class="welcome__content">
                <div class="welcome__heading">
                    <?php $welcome = get_field('welcome');
                    if ($welcome):
                        ?>
                    <h1 class="entry-title base-title">
                        <?php the_field('welcome_title') ?>
                    </h1>
                </div>
                <p class="welcome__subtitle">
                    <?php the_field('welcome_subtitle') ?>
                </p>
                <div class="welcome__list">
                    <div class="welcome__left">
                        <p>
                            <?php echo $welcome['left']; ?>
                        </p>
                    </div>
                    <div class="welcome__right">
                        <p>
                            <?php echo $welcome['right']; ?>
                        </p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="list-link">
        <div class="container">
            <ul class="link__list">
                <?php
                $link1 = get_field('link1');
                $link2 = get_field('link2');
                $link3 = get_field('link3');
                $link4 = get_field('link4');

                $links = array(
                    $link2,
                    $link3,
                    $link1,
                    $link4,
                );

                foreach ($links as $link) {
                    echo '
                    <li class="link__item">
                    <div class="link__row">
                        <div class="link__cell">
                            <div class="link__img">
                                <img src="' . $link["img"]["url"] . '"
                                    alt="' . $link['img']['alt'] . '">
                            </div>
                            <h3 class="link__name"> ' . $link['title'] . '</h3>
                        </div>
                        <div class="link__cell">
                            <div class="link__info">
                                <p>' . $link['bonus'] . ' <span>Bonus</span></p>
                            </div>
                        </div>

                    </div>
                    <div class="link__row">
                        <div class="link__cell">
                            <div class="link__text">
                                <p>' . $link['description'] . '</p>
                            </div>
                        </div>
                        <div class="link__cell"><a href="' . $link['url'] . '" class="btn-base green">apostar
                                agora</a></div>
                    </div>
                
                </li>
 
                    ';
                };
                ?>
            </ul>
        </div>
    </section>
    <div class="advantages">
        <div class="container">
            <?php
            $advantages = get_field('advantages');
            if ($advantages):
                ?>
            <div class="advantages__content">
                <div class="advantages__img"><img src=" <?php echo $advantages['img']['url'] ?>"
                        alt="<?php echo $advantages['img']['alt'] ?>""></div>
                <div class=" advantages__list">
                    <?php echo $advantages['list'] ?>


                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <section class="benefits">
        <div class="container">
            <?php
            $benefits = get_field('benefits');
            if ($benefits):
                ?>
            <div class="benefits__content">
                <div class="benefits__block"><img src="<?php echo $benefits['img1']['url'] ?>"
                        alt="<?php echo $benefits['img1']['url'] ?>?>" class="none-mb benefit__image--small">
                    <img src="<?php echo $benefits['img2']['url'] ?>" alt="<?php echo $benefits['img2']['alt'] ?>"
                        class="benefit__image--big">
                </div>
                <div class="benefits__block">
                    <div class="benefits__item flex">
                        <h6>
                            <?php echo $benefits['title'] ?>
                        </h6>
                    </div>
                    <div class="benefits__item">
                        <p>
                            <?php echo $benefits['text'] ?>
                        </p>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <?php
            $about = get_field('about');
            if ($about):
                ?>
            <div class="about__container">
                <div class="about__heading">
                    <?php echo $about['title'] ?>

                </div>
                <div class="about__content">
                    <div class="about__img"><img src="<?php echo $about['img']['url'] ?>"
                            alt="<?php echo $about['img1']['alt'] ?>"></div>
                    <div class="about__block">
                        <?php echo $about['text1'] ?>
                    </div>
                    <div class="about__block flex-desktop">
                        <?php echo $about['text2'] ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="container">
            <?php
            $info = get_field('info');
            if ($info):
                ?>
            <div class="info__content">
                <h3>
                    <?php echo $info['title'] ?>
                </h3>
                <?php echo $info['text'] ?>

                <?php endif; ?>
            </div>
        </div>
    </section>
</main>



<?php

get_footer();