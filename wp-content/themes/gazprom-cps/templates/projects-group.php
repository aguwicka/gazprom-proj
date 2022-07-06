<?php
/**
 * Template Name: Проекты
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
                            Компания / наши проекты
                        </div>
                        <p class="app-section__description typo--body1">
                            <?php the_content();?>
                        </p>
                    </header>
                </div>
            </div>
        </div>

        <!-- Реализованные проекты -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <div class="projects">
                        <div class="projects__items">
                            <?php
                                $page_id = get_queried_object_id();
                                $catCards = get_posts( array(
                                    'numberposts' => -1,
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'post_type'   => 'page',
                                    'post_parent' => $page_id,
                                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                ) );

                                foreach ($catCards as $catCard):
                            ?>
                            <a href="<?= get_permalink($catCard->ID)?>" class="project-card">
                                <?php if(carbon_get_post_meta($catCard->ID, 'projects_pre_img')):?>
                                <div class="project-card__image">
                                    <img src="<?= carbon_get_post_meta($catCard->ID, 'projects_pre_img'); ?>" alt="" />
                                </div>
                                <?php endif;?>
                                <div class="project-card__title typo--subtitle2">
                                    <?= $catCard->post_title; ?>
                                </div>
                                <div class="project-card__description">
                                    <?= $catCard->post_content; ?>
                                </div>
                            </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>
</main>

<?php get_footer();?>
