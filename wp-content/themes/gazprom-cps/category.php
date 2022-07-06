<?php
get_header();?>

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
                            $cats = get_categories([
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'exclude'      => 1,
                            ]);
                            $categories = get_the_category();
                            $category_id = $categories[0]->cat_ID;
                            ?>
                            <div class="list-filter">
                                <?php foreach ($cats as $cat):
                                    ?>
                                <div class="list-filter__item"><a href="<?= get_category_link($cat->term_id);?>"><?= $cat->cat_name;?></a></div>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="news-list__items">
                            <?php
                            $my_posts = get_posts([
                                    'numberposts' => 5,
                                    'category'    => $category_id,
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'post_type'   => 'post',
                                    ]
                                );
                                foreach ($my_posts  as $my_post){
                                    setup_postdata( $my_post );
                            ?>
                                    <div class="news-list-card">
                                        <div class="news-list-card__image">
                                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($my_post)); ?>" alt="" />
                                        </div>
                                        <div class="news-list-card__date typo--secondary"><?php the_date();?></div>
                                        <div class="news-list-card__title typo--subtitle2"><?php the_title(); ?></div>
                                        <div class="news-list-card__description"><?php the_excerpt();?></div>
                                        <div class="news-list-card__link">
                                            <a href="<?php the_permalink(); ?>" class="link">Читать далее</a>
                                        </div>
                                    </div>
                            <?php }
                            wp_reset_postdata();
                                ?>
                        </div>

                        <!-- <div class="news-list__pagination">
                          Пагинация
                        </div> -->
                    </div>
                </div>
            </article>
        </div>
    </main>

<?php get_footer();?>