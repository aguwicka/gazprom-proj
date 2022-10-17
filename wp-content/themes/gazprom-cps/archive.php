<?php

get_header(); ?>

    <main class="app-main">
        <div class="container">
            <article class="layout-news news-page">
                <header class="news-page__header">
                    <div class="app-section as-banner has-no-bg">
                        <div class="app-section__content">
                            <header class="app-section__header">
                                <h1 class="app-section__title typo--h1">
                                    Следите за тем, что интересует вас
                                </h1>
                                <div class="app-section__pretitle typo--secondary">
                                    Новости
                                </div>
                                <p class="app-section__description typo--body1">
                                    Узнавайте первыми об актуальных проектах и событиях
                                    компаний.
                                </p>
                            </header>
                        </div>
                    </div>
                </header>

                <div class="news-page__aside">
                    <div class="news-addons">
                        <div class="news-addons__group">
                            <div class="news-addons__group-title typo--subtitle2">Медиа</div>
                            <div class="news-addons__group-item">Вконтакте</div>
                            <div class="news-addons__group-item">Rutube</div>
                        </div>
                        <div class="news-addons__group">
                            <div class="news-addons__group-title typo--subtitle2">Контакты для СМИ</div>
                            <div class="news-addons__group-item">+7(999)459-69-59</div>
                            <div class="news-addons__group-item">Info@gazpromcps.ru</div>
                        </div>
                        <div class="news-addons__group">
                            <div class="news-addons__group-title typo--subtitle2">Популярные теги</div>
                            <div class="news-addons__group-item">
                                <span>Партнёрство</span>
                            </div>
                            <div class="news-addons__group-item">
                                <span>Цифровизация</span>
                            </div>
                            <div class="news-addons__group-item">
                                <span>Эффективность</span>
                            </div>
                            <div class="news-addons__group-item">
                                <span>Экология</span>
                            </div>
                            <div class="news-addons__group-item">
                                <span>Безопасность</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="news-page__content">
                    <div class="news-list">
                        <div class="news-list__filter">
                            <?php

                            $cats     = get_categories([
                                'orderby' => 'name',
                                'order'   => 'ASC',
                                'exclude' => [1, 9]
                            ]);
                            $category = get_category(get_query_var('cat'));
                            $cat_id   = $category->cat_ID;
                            ?>
                            <div class="list-filter">
                                <?php foreach ($cats as $cat):
                                    ?>
                                    <div class="list-filter__item"><a href="<?= get_category_link(
                                            $cat->term_id
                                        ); ?>"><?= $cat->cat_name; ?></a></div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="news-list__items">
                            <?php
                            $paged    = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
                            $my_posts = [
                                'posts_per_page' => 10,
                                'cat'            => $cat_id,
                                'paged'          => $paged,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                                'post_type'      => 'post',
                            ];
                            $query    = new WP_Query($my_posts);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    ?>
                                    <div class="news-list-card">
                                        <div class="news-list-card__image">
                                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"
                                                 alt=""/>
                                        </div>
                                        <div class="news-list-card__date typo--secondary"><?php the_date(); ?></div>
                                        <div class="news-list-card__title typo--subtitle2"><?php the_title(); ?></div>
                                        <div class="news-list-card__description"><?php the_excerpt(); ?></div>
                                        <div class="news-list-card__link">
                                            <a href="<?php the_permalink(); ?>" class="link">Читать далее</a>
                                        </div>
                                    </div>
                                <?php endwhile;

                                $big = 999999999; ?>
                                <div class="news-list__pagination">
                                    <?php
                                    echo wp_kses_post(
                                        paginate_links([
                                            'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                            'current' => max(1, get_query_var('paged')),
                                            'total'   => $query->max_num_pages
                                        ])
                                    ); ?>
                                </div>
                                <?php
                                wp_reset_postdata(); endif;
                            ?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>

<?php get_footer(); ?>