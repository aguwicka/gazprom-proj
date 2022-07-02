<?php
get_header(); ?>

<main class="app-main">
    <div class="container">
        <article class="layout-news news-single">
            <div class="news-single__image">
                <div class="just-media">
                    <div class="just-media">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt=""/>
                    </div>
                </div>
            </div>

            <div class="news-single__aside">
                <div class="news-addons">
                    <div class="news-addons__group">
                        <div class="news-addons__group-title typo--subtitle2">
                            Поделиться
                        </div>
                        <div class="news-addons__group-item">Вконтакте</div>
                        <div class="news-addons__group-item">Rutube</div>
                    </div>
                    <div class="news-addons__group">
                        <div class="news-addons__group-title typo--subtitle2">
                            Контакты для СМИ
                        </div>
                        <div class="news-addons__group-item">+7(999)459-69-59</div>
                        <div class="news-addons__group-item">Info@gazpromcps.ru</div>
                    </div>
                    <div class="news-addons__group">
                        <div class="news-addons__group-title typo--subtitle2">
                            Популярные теги
                        </div>
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
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div class="news-single__content">
                        <article class="news-post">
                            <div class="news-post__meta">
                                <div class="news-post__tag"><?php echo get_the_author(); ?></div>
                                <time class="news-post__date typo--secondary"><?php the_date() ?></time>
                            </div>
                            <div class="news-post__text">
                                <header class="news-post__header">
                                    <h1 class="news-post__main-title typo--h1">
                                        <?php the_title(); ?>
                                    </h1>
                                </header>
                                <?php the_content();?>

                            </div>
                        </article>

                        <div class="news-single__nav">
                            <a
                                    href="#prev"
                                    class="news-single__nav-prev news-single__nav-item"
                            ></a>
                            <a
                                    href="#next"
                                    class="news-single__nav-next news-single__nav-item"
                            ></a>
                        </div>
                    </div>
                    <?php
                } // end while
            } // end if
            ?>
        </article>
    </div>
</main>

<?php get_footer(); ?>
