<?php
/**
 * Template Name: Проект детальный шаблон
 * Template Post Type: page
 */

get_header();?>

<main class="app-main">
    <article class="layout-default">
        <div
            class="app-section as-banner"
            style="--app-section-bg: url('https://picsum.photos/1600/350')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1">
                            ЦУП (Центр управления проектами)
                        </h1>
                        <div class="app-section__pretitle typo--secondary">
                            Проекты / наши проекты
                        </div>
                        <p class="app-section__description typo--body1"></p>
                    </header>
                </div>
            </div>
        </div>

        <!-- О проекте -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('projects_title'); ?></h1>
                        <p class="app-section__description">
                            <?= carbon_get_the_post_meta('projects_content'); ?>
                        </p>
                    </header>
                    <blockquote class="speech">
                        <p class="speech__text">
                            <?= carbon_get_the_post_meta('projects_blockquote'); ?>
                        </p>
                        <a class="speech__author" rel="author">
                            <div class="speech__author-image">
                                <img src="<?= carbon_get_the_post_meta('projects_img'); ?>" alt="">
                            </div>
                            <div class="speech__author-name typo--subtitle2"><?= carbon_get_the_post_meta('projects_name'); ?></div>
                            <div class="speech__author-role"><?= carbon_get_the_post_meta('projects_info'); ?></div>
                        </a>
                    </blockquote>

                </div>
            </div>
        </section>

        <!-- Фотоотчет -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">Фотоотчет</h1>
                    </header>
                    <div class="photos">
                        <div class="photos__items">
                            <!-- TODO! Антошка, прикрути лайтбокс или около того -->
                            <div class="photo-card">
                                <img src="https://picsum.photos/600/601" alt="">
                            </div>
                            <div class="photo-card">
                                <img src="https://picsum.photos/600/602" alt="">
                            </div>
                            <div class="photo-card">
                                <img src="https://picsum.photos/600/603" alt="">
                            </div>
                            <div class="photo-card">
                                <img src="https://picsum.photos/600/604" alt="">
                            </div>
                            <div class="photo-card">
                                <img src="https://picsum.photos/600/605" alt="">
                            </div>
                            <div class="photo-card">
                                <img src="https://picsum.photos/600/606" alt="">
                            </div>
                        </div>
                    </div>
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
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/311" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title">Реализованные</a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/312" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title">Базовые</a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/313" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title">Проекты развития</a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/319" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title"
                                >Перспективные проекты
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
