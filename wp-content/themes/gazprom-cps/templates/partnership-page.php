<?php
/**
 * Template Name: Сотрудничество
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
                            Сотрудничество
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content();?>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <?php if(carbon_get_the_post_meta('crb_partnership')):?>
        <section class="app-section is-dark">
            <div class="container">
                <div class="app-section__content">
                    <div class="features">
                        <div class="features__items">
                            <?php
                            $partnersCards = carbon_get_the_post_meta( 'crb_partnership' );

                            foreach ($partnersCards as $partnersCard):
                            ?>
                            <div class="feature-card">
                                <div class="feature-card__icon">
                                    <img src="<?= $partnersCard['partnership_img'];?>" alt="">
                                </div>
                                <?php if($partnersCard['crb_title']):?>
                                <div class="feature-card__title typo--subtitle2">
                                    <?= $partnersCard['crb_title'];?>
                                </div>
                                <?php endif;?>
                                <?php if($partnersCard['crb_content']):?>
                                <div class="feature-card__description">
                                    <?= $partnersCard['crb_content'];?>
                                </div>
                                <?php endif;?>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">Разделы</h1>
                    </header>
                    <div class="parts has-small-cards">
                        <div class="parts__items">
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(5)); ?>" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(5);?>" class="part-card__title"><?=  get_the_title( 5 )?></a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(29)); ?>" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(29);?>" class="part-card__title"><?=  get_the_title( 29 )?></a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(79)); ?>" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(79);?>" class="part-card__title"><?=  get_the_title( 79 )?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
