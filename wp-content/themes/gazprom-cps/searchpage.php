<?php
/**
Template Name: Search Page
 */

get_header();?>

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

                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                       <?php the_content();?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>

    </article>
</main>

<?php get_footer();?>
