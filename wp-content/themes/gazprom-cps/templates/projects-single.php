<?php
/**
 * Template Name: Проект детальный шаблон
 * Template Post Type: page
 */

get_header();?>

<main class="app-main">
    <article class="layout-default">
        <div
            class="app-section as-banner"
            style="--app-section-bg: url('<?= wp_get_attachment_url(get_post_thumbnail_id()); ?>')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1">
                            <?php the_title();?>
                        </h1>
                        <div class="app-section__pretitle typo--secondary">
                            Проекты / наши проекты
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content();?>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <!-- О проекте -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('projects_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('projects_title'); ?></h1>
                        <?php endif;?>
                        <?php if(carbon_get_the_post_meta('projects_content')):?>
                        <p class="app-section__description">
                            <?= carbon_get_the_post_meta('projects_content'); ?>
                        </p>
                        <?php endif;?>
                    </header>
                    <?php if(carbon_get_the_post_meta('projects_blockquote')):?>
                    <blockquote class="speech">
                        <p class="speech__text">
                            <?= carbon_get_the_post_meta('projects_blockquote'); ?>
                        </p>
                        <a class="speech__author" rel="author">
                            <div class="speech__author-image">
                                <img src="<?= carbon_get_the_post_meta('projects_img'); ?>" alt="">
                            </div>
                            <div class="speech__author-name typo--subtitle2"><?= carbon_get_the_post_meta('projects_name'); ?></div>
                            <div class="speech__author-role"><?= carbon_get_the_post_meta('projects_info'); ?></div>
                        </a>
                    </blockquote>
                    <?php endif;?>

                </div>
            </div>
        </section>

        <!-- Фотоотчет -->
        <?php if(carbon_get_the_post_meta('crb_lightbox')):?>
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">Фотоотчет</h1>
                    </header>
                    <div class="photos">
                        <div class="photos__items">
                            <?php
                            $carouselCards = carbon_get_the_post_meta('crb_lightbox');

                            foreach ($carouselCards as $carouselCard):
                            ?>
                            <div class="photo-card">
                                <a href="<?= $carouselCard['lightbox_image']?>" data-lightbox="Photo">
                                    <img src="<?= $carouselCard['lightbox_image']?>" alt="">
                                </a>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>

        <!-- Проекты -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">Проекты</h1>
                    </header>
                    <div class="parts has-small-cards">
                        <div class="parts__items">
                            <?php

                            $mainCards = get_posts( array(
                                'numberposts' => -1,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'post_type'   => 'page',
                                'post_parent' => 36,
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            foreach ($mainCards as $mainCard):
                                ?>
                                <div class="part-card">
                                    <div class="part-card__image">
                                        <img src="<?= wp_get_attachment_url(get_post_thumbnail_id($mainCard)); ?>" alt="" />
                                    </div>
                                    <div class="part-card__overlay"></div>
                                    <a href="<?php the_permalink($mainCard->ID);?>" class="part-card__title"><?= $mainCard->post_title; ?></a>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
