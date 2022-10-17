<?php
/**
 * Template Name: Услуги
 * Template Post Type: page
 */

get_header(); ?>

<main class="app-main">
    <article class="layout-default">
        <div
                class="app-section as-banner"
                style="--app-section-bg: url(<?= wp_get_attachment_url(get_post_thumbnail_id()); ?>)"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1"><?php the_title(); ?></h1>
                        <div class="app-section__pretitle typo--secondary">
                            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php if ( have_posts() ) : ?>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php the_content(); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
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
                        <h1 class="app-section__title typo--h2">
                            <?= carbon_get_the_post_meta('services_name'); ?>
                        </h1>
                        <p class="app-section__description">
                            <?= carbon_get_the_post_meta('services_desc'); ?>
                        </p>
                    </header>

                    <div class="features">
                        <?php $services = carbon_get_the_post_meta('services');
                        foreach ($services as $service):
                            ?>
                            <details class="app-collapse features__group">
                                <summary class="app-collapse__summary">
                                    <div class="app-collapse__header">
                                        <?php if ($service['crb_image']): ?>
                                            <div class="app-collapse__icon">
                                                <img src="<?= $service['crb_image']; ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($service['crb_title']): ?>
                                            <div class="app-collapse__title typo--subtitle2">
                                                <?= $service['crb_title']; ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($service['crb_content']): ?>
                                            <div class="app-collapse__description">
                                                <?= $service['crb_content']; ?>
                                            </div>
                                        <?php endif;
                                        ?>
                                        <div class="app-collapse__counter">Услуг (<?= (count(
                                                $service['mdls']
                                            )); ?>)
                                        </div>
                                    </div>
                                    <div class="app-collapse__arrow">
                                        <svg
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                    d="M4.24106 7.7459C4.53326 7.44784 4.99051 7.42074 5.31272 7.66461L5.40503 7.7459L12 14.4734L18.595 7.7459C18.8872 7.44784 19.3444 7.42074 19.6666 7.66461L19.7589 7.7459C20.0511 8.04396 20.0777 8.51037 19.8386 8.83904L19.7589 8.93321L12.582 16.2541C12.2898 16.5522 11.8325 16.5793 11.5103 16.3354L11.418 16.2541L4.24106 8.93321C3.91965 8.60534 3.91965 8.07376 4.24106 7.7459Z"
                                                    fill="currentColor"
                                            />
                                        </svg>
                                    </div>
                                </summary>
                                <?php if ($service['mdls']): ?>
                                    <div class="app-collapse__content">
                                        <div class="features__items">
                                            <?php foreach ($service['mdls'] as $crb_module): ?>
                                                <div class="feature-card">
                                                    <div class="feature-card__title typo--subtitle2">
                                                        <?= $crb_module['modal_name'] ?>
                                                    </div>
                                                    <div class="feature-card__description">
                                                        <?= $crb_module['modal_sub_name'] ?>
                                                    </div>
                                                    <div class="feature-card__actions">
                                                        <a href="#" class="link like-button">Заказать</a>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </details>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>
