<?php
/**
 * Template Name: Ответы на вопросы
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
                    <article class="faq">

                        <?php
                        $faqs = carbon_get_the_post_meta('faqs');
                        foreach ($faqs as $faq):
                            ?>
                            <div class="faq__item">
                                <?php if ($faq['crb_title']): ?>
                                    <div class="faq__q typo--h2">
                                        <?= $faq['crb_title']; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="faq__a">
                                    <?= wpautop($faq['crb_content']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </article>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>
