<?php
/**
 * Template Name: Совет Директоров
 * Template Post Type: page
 */

get_header(); ?>

<main class="app-main">
    <article class="layout-default">
        <div
                class="app-section as-banner"
                style="--app-section-bg: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1"><?php the_title(); ?></h1>
                        <div class="app-section__pretitle typo--secondary">
                            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content(); ?>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <div class="company-parts">
                        <?php
                        $directors = carbon_get_the_post_meta('crb_directors');

                        foreach ($directors as $director):
                            ?>
                            <div class="pie-part" style="--value: <?= $director['crb_percent'] ?>">
                                <div class="pie-part__chart"></div>
                                <div class="pie-part__content">
                                    <div class="pie-part__value"><?= $director['crb_percent'] ?></div>
                                    <div class="pie-part__label typo--secondary"><?= $director['crb_title'] ?></div>
                                    <div class="pie-part__image">
                                        <img
                                                src="<?= $director['crb_img'] ?>"
                                                alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $mainCards = carbon_get_the_post_meta('crb_directors_cards');
        if ($mainCards):
            ?>
            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <div class="app-section__title typo--h2"><?= carbon_get_the_post_meta('directors_main_pie_title'); ?></div>
                        <div class="persons">
                            <div class="persons__items">
                                <?php
                                foreach ($mainCards as $mainCard):
                                    $leads = $mainCard['crb_modal_directors'];
                                    ?>
                                    <div class="person-card">
                                        <?php if ($mainCard['crb_img']): ?>
                                            <div class="person-card__image">
                                                <img src="<?= $mainCard['crb_img']; ?>" alt=""/>
                                            </div>
                                        <?php endif; ?>
                                        <div class="person-card__title typo--subtitle2 <?php if (!$leads) {
                                            echo 'person-card-lock';
                                        } ?>">
                                            <div class="modal-link" tabindex="-1">
                                                <div class="modal-link__name"><?= $mainCard['crb_title']; ?></div>
                                                <?php

                                                if ($leads):?>
                                                    <div class="modal-link__inner">
                                                        <div class="modal-link__content">
                                                            <article class="person">
                                                                <header class="person__header">
                                                                    <div class="person__image">
                                                                        <img
                                                                                class="person__image-media"
                                                                                src="<?= $mainCard['crb_img']; ?>;?>"
                                                                                alt=""
                                                                        />
                                                                    </div>
                                                                    <div>
                                                                        <h2 class="person__title typo--h2"><?= $mainCard['crb_title']; ?></h2>
                                                                        <div class="person__subtitle typo--body2">
                                                                            <?= $mainCard['crb_content']; ?>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <?php foreach ($leads as $lead):
                                                                    if ($lead['crb_modal_title'] || $lead['crb_modal_content']):
                                                                        ?>
                                                                        <section class="person__info">
                                                                            <h3 class="person__info-title typo--subtitle3"><?= $lead['crb_modal_title']; ?></h3>
                                                                            <p class="person__info-text">
                                                                                <?= $lead['crb_modal_content']; ?>
                                                                            </p>
                                                                        </section>
                                                                    <?php
                                                                    endif;
                                                                endforeach; ?>
                                                            </article>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="person-card__description">
                                            <?= $mainCard['crb_content']; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </article>
</main>


<?php get_footer(); ?>
