<?php

get_header(); ?>

<main class="app-main">
    <article class="layout-default">

        <!-- Задачи -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1">Что вас<br>интересует?</h1>
                    </header>

                    <?php get_search_form(); ?>
                </div>

                <?php
                $current   = absint(
                    max(
                        1,
                        get_query_var('paged') ? get_query_var('paged') : get_query_var('page')
                    )
                );
                $s         = get_search_query();
                $the_query = new WP_Query(
                    [
                        's'              => $s,
                        'posts_per_page' => 10,
                        'paged'          => $current,
                    ]
                );
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <article class="faq" style="margin-top:20px">
                            <div class="faq__item">
                                <div class="faq__q typo--h4">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile;
                    $big = 999999999; ?>
                    <div class="news-list__pagination" style="margin-top: 20px">
                        <?php
                        echo wp_kses_post(
                            paginate_links([
                                'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                'current' => max(1, get_query_var('paged')),
                                'total'   => $the_query->max_num_pages
                            ])
                        ); ?>
                    </div>
                    <div class="search__count" style="text-align: center;margin-top: 15px;">
                        Найдено записей по вашему запросу:
                        <?php
                        global $wp_query;
                        echo $wp_query->found_posts;
                        ?></div>
                    <?php wp_reset_postdata();
                } else { ?>
                    <p>По вашему запросу ничего не найдено</p>
                <?php } ?>
            </div>
        </section>

    </article>
</main>

<?php get_footer(); ?>
