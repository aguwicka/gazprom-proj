<?php
/**
 * Template Name: Руководство Внутренняя страница
 * Template Post Type: page
 */

get_header();?>

<main class="app-main">
    <article class="layout-default">
        <div class="app-section as-banner" style="--app-section-bg: url('https://picsum.photos/1600/351')">
            <div class="container">
                <div class="app-section__content is-visible play-anim">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1"><?php the_title();?></h1>
                        <div class="app-section__pretitle typo--secondary">
                            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content();?>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <section class="app-section">
            <div class="container">
                <div class="app-section__content is-visible play-anim">
                    <article class="person">
                        <header class="person__header">
                            <div class="person__image">
                                <img class="person__image-media" src="<?= carbon_get_the_post_meta('leads_pre_img'); ?>" alt="">
                            </div>
                            <div>
                                <h2 class="person__title typo--h2"><?php the_title()?></h2>
                                <div class="person__subtitle typo--body2">
                                    <?= carbon_get_the_post_meta('leads_desc'); ?>
                                </div>
                            </div>
                        </header>
                        <?php
                        $leads = carbon_get_the_post_meta( 'crb_leads' );

                        foreach ($leads as $lead):
                        ?>
                        <section class="person__info">
                            <h3 class="person__info-title typo--subtitle3"><?= $lead['crb_title'];?></h3>
                            <p class="person__info-text">
                                <?= $lead['crb_content'];?>
                            </p>
                        </section>
                        <?php endforeach;?>
                    </article>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
