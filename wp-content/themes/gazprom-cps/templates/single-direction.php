<?php
/**
 * Template Name: Направления одиночная страница
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
                            Компания / Направления
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content();?>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <!-- О проекте -->
        <section class="app-section is-dark">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('direction_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('direction_title');?></h1>
                        <?php endif;?>
                        <?php if(carbon_get_the_post_meta('direction_content')):?>
                        <div class="app-section__description">
                            <?= carbon_get_the_post_meta('direction_content');?>
                        </div>
                        <?php endif;?>
                    </header>
                </div>
            </div>
        </section>

        <!-- Задачи -->
        <section class="app-section has-image">
            <div class="container">
                <?php if(carbon_get_the_post_meta('direction_img')):?>
                <div class="app-section__image">
                    <img src="<?= carbon_get_the_post_meta('direction_img');?>" alt="" />
                </div>
                <?php endif;?>
                <div class="app-section__content">
                    <?php if(carbon_get_the_post_meta('direction_services_title')):?>
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">
                            <?= carbon_get_the_post_meta('direction_services_title');?>
                        </h1>
                    </header>
                    <?php endif;?>
                    <?php
                    $directionCards = carbon_get_the_post_meta('crb_direction');
                    if($directionCards):?>
                    <ul class="list">
                        <?php  foreach ($directionCards as $directionCard):?>
                        <li>
                            <?= $directionCard['crb_list'];?>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>
            </div>
        </section>

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

<?php  get_footer();?>
