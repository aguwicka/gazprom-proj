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
            style="--app-section-bg: url('https://picsum.photos/1600/351')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1">Карьера</h1>
                        <div class="app-section__pretitle typo--secondary">
                            Компания / Карьера
                        </div>
                        <p class="app-section__description typo--body1">
                            Главная ценность компании – это команда, профессионалы в
                            проектном управлении, развитии цифровых технологий и
                            строительстве
                        </p>
                    </header>
                </div>
            </div>
        </div>

        <!-- О компании -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('career_title'); ?></h1>
                        <p class="app-section__description">
                            <?= carbon_get_the_post_meta('career_content'); ?>
                        </p>
                    </header>
                    <blockquote class="speech">
                        <p class="speech__text">
                            <?= carbon_get_the_post_meta('career_blockquote'); ?>
                            <br /><br />
                            <a href="<?= carbon_get_the_post_meta('career_link'); ?>" class="link"><?= carbon_get_the_post_meta('career_link_text'); ?>
                            </a>
                        </p>
                    </blockquote>
                </div>
            </div>
        </section>

        <!-- Вакансии -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('vacancies_title'); ?></h1>
                    </header>
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
                            <? endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Мы предлагаем -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('sug_title'); ?></h1>
                    </header>
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
                    <div class="just-media">
                        <img src="<?= carbon_get_the_post_meta('sug_img'); ?>" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
