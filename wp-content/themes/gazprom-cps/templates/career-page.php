<?php
/**
 * Template Name: Карьера
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

        <!-- О компании -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('career_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('career_title'); ?></h1>
                        <?php endif;?>
                        <?php if(carbon_get_the_post_meta('career_content')):?>
                        <p class="app-section__description">
                            <?= carbon_get_the_post_meta('career_content'); ?>
                        </p>
                        <?php endif;?>
                    </header>
                    <?php if(carbon_get_the_post_meta('career_content') || carbon_get_the_post_meta('career_link_text')): ?>
                    <blockquote class="speech">
                        <p class="speech__text">
                            <?= carbon_get_the_post_meta('career_blockquote'); ?>
                            <br /><br />
                            <a href="<?= carbon_get_the_post_meta('career_link'); ?>" class="link"><?= carbon_get_the_post_meta('career_link_text'); ?>
                            </a>
                        </p>
                    </blockquote>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <!-- Вакансии -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('vacancies_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('vacancies_title'); ?></h1>
                        <?php endif;?>
                    </header>
                    <?php if(carbon_get_the_post_meta('crb_vacancies')):?>
                    <div class="vacancies">
                        <div class="vacancies__items">
                            <?php
                            $vacancies = carbon_get_the_post_meta( 'crb_vacancies' );

                            foreach ($vacancies as $vacancy):
                            ?>
                            <div class="vacancy-card">
                                <a href="<?= $vacancy['crb_link'];?>" class="vacancy-card__name typo--subtitle2"><?= $vacancy['crb_title'];?></a>
                                <div class="vacancy-card__location"><?= $vacancy['crb_subtext'];?></div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <!-- Мы предлагаем -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('sug_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('sug_title'); ?></h1>
                        <?php endif;?>
                    </header>
                    <?php if(carbon_get_the_post_meta('crb_sug')):?>
                    <ul class="list">
                        <?php
                        $suggestions = carbon_get_the_post_meta( 'crb_sug' );

                        foreach ($suggestions as $suggestion):
                        ?>
                        <li>
                            <?= $suggestion['crb_list'];?>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                    <?php if( carbon_get_the_post_meta('sug_img') ):?>
                    <div class="just-media">
                        <img src="<?= carbon_get_the_post_meta('sug_img'); ?>" alt="" />
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
