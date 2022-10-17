<?php
/**
 * Template Name: Направления
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
                <div class="app-section__content">
                    <div class="directions">
                        <div class="directions__items">

                            <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'post_type'   => 'page',
                                'post_parent' => 22,
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach ($posts as $post):
                            ?>
                            <section class="direction-card">
                                <?php if(carbon_get_post_meta($post->ID, 'direction_main_img')):?>
                                <div class="direction-card__image">
                                    <img src="<?= carbon_get_post_meta($post->ID, 'direction_main_img'); ?>" alt="" />
                                </div>
                                <?php endif;?>
                                <?php if(carbon_get_post_meta($post->ID, 'direction_tag')):?>
                                <div class="direction-card__pretitle typo--secondary">
                                    <?= carbon_get_post_meta($post->ID, 'direction_tag'); ?>
                                </div>
                                <?php endif;?>
                                <div class="direction-card__title typo--subtitle3">
                                    <?= $post->post_title;?>
                                </div>
                                <div class="direction-card__description">
                                    <?= $post->post_content;?>
                                </div>
                                <a href="<?= get_permalink($post->ID);?>" class="direction-card__arrow">

                                    <svg
                                            width="8"
                                            height="14"
                                            viewBox="0 0 8 14"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                                d="M1 1L7 7L1 13"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                        />
                                    </svg>

                                </a>
                                <a
                                    href="<?= get_permalink($post->ID);?>"
                                    class="direction-card__link"
                                ></a>
                            </section>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>
</main>

<?php get_footer();?>
