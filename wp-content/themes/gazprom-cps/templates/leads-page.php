<?php
/**
 * Template Name: Руководство
 * Template Post Type: page
 */

get_header();?>

<main class="app-main">
    <article class="layout-default">
        <div
            class="app-section as-banner"
            style="--app-section-bg: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1"><?php the_title();?></h1>
                        <div class="app-section__pretitle typo--secondary">
                            Компания/Руководсво
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
                    <div class="persons">
                        <div class="persons__items">
                            <?php
                            $page_id = get_queried_object_id();

                            $mainCards = get_posts( array(
                                'numberposts' => -1,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'post_type'   => 'page',
                                'post_parent' => $page_id,
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );
                            foreach ($mainCards as $mainCard):
                            ?>
                            <div class="person-card">
                                <div class="person-card__image">
                                    <img src="<?= carbon_get_post_meta($mainCard->ID, 'leads_pre_img'); ?>" alt="" />
                                </div>
                                <div class="person-card__title typo--subtitle2">
                                    <div class="modal-link" tabindex="-1">
                                        <div class="modal-link__name"><?= $mainCard->post_title;?></div>
                                        <?php
                                        $leads = carbon_get_post_meta($mainCard->ID , 'crb_leads' );
                                        if($leads):?>
                                        <div class="modal-link__inner">
                                            <div class="modal-link__content">
                                                <article class="person">
                                                    <header class="person__header">
                                                        <div class="person__image">
                                                            <img
                                                                    class="person__image-media"
                                                                    src="<?= carbon_get_post_meta($mainCard->ID , 'leads_pre_img' );?>"
                                                                    alt=""
                                                            />
                                                        </div>
                                                        <div>
                                                            <h2 class="person__title typo--h2"><?= $mainCard->post_title;?></h2>
                                                            <div class="person__subtitle typo--body2">
                                                                <?= $mainCard->post_content;?>
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <?php foreach ($leads as $lead): ?>
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
                                        <?php endif;?>
                                    </div>
                                </div>
                                <div class="person-card__description">
                                    <?= carbon_get_post_meta($mainCard->ID, 'leads_desc'); ?>
                                </div>
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
