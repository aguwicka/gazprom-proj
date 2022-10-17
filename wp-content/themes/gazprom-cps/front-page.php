<?php

/**
 * Template Name: Главная страница
 * Template Post Type: page
 */
get_header(); ?>

<main class="app-main">
    <article class="layout-default">
        <div class="slider-main js-slider-mainpage">
            <?php
            $sliderSlides = carbon_get_the_post_meta('crb_slider');
            $total = 0;
            foreach ($sliderSlides as $sliderSlide):
                $total++;
                ?>
                <div class="slider-main__slide">
                    <div
                            class="app-section as-banner"
                            style="--app-section-bg: url('<?= $sliderSlide['slide_img']; ?>')"
                    >
                        <div class="container">
                            <div class="app-section__content">
                                <header class="app-section__header">
                                    <h1 class="app-section__title typo--h1">
                                        <?= $sliderSlide['crb_title'] ?>
                                    </h1>
                                    <div class="app-section__pretitle typo--secondary">
                                        <?= $sliderSlide['crb_subtitle'] ?>
                                    </div>
                                    <p class="app-section__description typo--body1">
                                        <?= $sliderSlide['crb_content'] ?>
                                    </p>
                                </header>
                                <div class="slider-main__nav">
                                    <div class="slider-main__pager" data-all="<?= (count($sliderSlides)) ?>">
                                        <div class="slider-main__pager-item for-prev js-slider-pager-prev">
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.5" d="M9 17L1 9L9 0.999999" stroke="currentColor"/>
                                            </svg>
                                        </div>
                                        <div class="slider-main__pager-text"><?= $total ?> <small>/<?= (count(
                                                    $sliderSlides
                                                )) ?></small>
                                        </div>
                                        <div class="slider-main__pager-item for-next js-slider-pager-next">
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 1L9 9L1 17" stroke="currentColor"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <?php
                                    $sliderNavs = carbon_get_the_post_meta('crb_slider_links');
                                    if ($sliderNavs):
                                        ?>
                                        <div class="slider-main__links" data-slide="<?= $total;?>">
                                            <?php
                                            $slideItem = 0;
                                            foreach ($sliderNavs as $sliderLink):
                                                $slideItem++;
                                                ?>
                                                <div class="slider-main__links-item">
                                                    <div class="slider-main__links-progress <?php if ($total ==$slideItem ) {
                                                        echo 'current';
                                                    }elseif ($total > $slideItem) { echo 'filled';} ?>" data-item="<?= $slideItem;?>"></div>
                                                    <a href="<?= $sliderLink['crb_slider__link'] ?>"
                                                       class="slider-main__links-link"><?= $sliderLink['crb_slider__title'] ?></a>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">
                            ГАЗПРОМ ЦПС –<br/>Цифровые проектные системы
                        </h1>
                        <div class="app-section__pretitle typo--secondary">
                            Оператор по созданию единых цифровых систем
                        </div>
                        <p class="app-section__description">
                            Контроль отбора и развития технологий по индивидуальным
                            потребностям компании, проектирование и реализация единой
                            ИТ-архитектуры»
                        </p>
                    </header>
                    <div class="directions">
                        <div class="directions__items">

                            <?php
                            $posts = get_posts([
                                'numberposts' => -1,
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'include' => [],
                                'exclude' => [],
                                'post_type' => 'page',
                                'post_parent' => 22,
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ]);

                            foreach ($posts as $post):
                                ?>
                                <section class="direction-card">
                                    <div class="direction-card__image">
                                        <img src="<?= carbon_get_post_meta($post->ID, 'direction_main_img'); ?>"
                                             alt=""/>
                                    </div>
                                    <div class="direction-card__pretitle typo--secondary">
                                        <?= carbon_get_post_meta($post->ID, 'direction_tag'); ?>
                                    </div>
                                    <div class="direction-card__title typo--subtitle3">
                                        <?= $post->post_title; ?>
                                    </div>
                                    <div class="direction-card__description">
                                        <?= $post->post_content; ?>
                                    </div>
                                    <a href="<?= get_permalink($post->ID); ?>" class="direction-card__arrow">

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
                                            href="<?= get_permalink($post->ID); ?>"
                                            class="direction-card__link"
                                    ></a>
                                </section>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title text-center typo--h2">
                            Популярные разделы
                        </h1>
                    </header>
                    <div class="parts">
                        <div class="parts__items">
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(36)); ?>" alt=""/>
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(36); ?>" class="part-card__title"><?= get_the_title(
                                        36
                                    ) ?></a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(5)); ?>" alt=""/>
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(5); ?>" class="part-card__title"><?= get_the_title(
                                        5
                                    ) ?></a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(29)); ?>" alt=""/>
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(29); ?>" class="part-card__title"><?= get_the_title(
                                        29
                                    ) ?></a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(79)); ?>" alt=""/>
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(79); ?>" class="part-card__title"><?= get_the_title(
                                        79
                                    ) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header has-actions">
                        <h1 class="app-section__title typo--h2">Новости</h1>
                        <div class="app-section__header-actions">
                            <div class="app-section__header-action">
                                <a href="/category/news/">Показать все</a>
                            </div>
                        </div>
                    </header>
                    <div class="news">
                        <div class="news__items">
                            <?php
                            $my_posts = get_posts([
                                    'numberposts' => 3,
                                    'category' => 8,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'post_type' => 'post',
                                ]
                            );
                            foreach ($my_posts as $my_post) {
                                setup_postdata($my_post);
                                ?>
                                <div class="news-card">
                                    <div class="news-card__image">
                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($my_post->ID)); ?>"
                                             alt=""/>
                                    </div>
                                    <div class="news-card__pretitle typo--secondary">
                                        <?= $my_post->post_date; ?>
                                    </div>
                                    <div class="news-card__title typo--subtitle2">
                                        <a href="<?php the_permalink($my_post->ID); ?>" color="var(--color-primary)">
                                            <?= $my_post->post_title; ?>
                                        </a>
                                    </div>
                                    <div class="news-card__description">
                                        <?= $my_post->post_excerpt ?>
                                    </div>
                                    <a href="<?php the_permalink($my_post->ID); ?>" class="news-card__to-link"
                                    >Читать далее</a
                                    >
                                </div>
                            <?php }
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>
<?php get_footer(); ?>
