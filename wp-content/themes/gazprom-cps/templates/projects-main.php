<?php
/**
 * Template Name: Наши проекты
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
                        <h1 class="app-section__title typo--h1">Наши проекты</h1>
                        <div class="app-section__pretitle typo--secondary">
                            Компания
                        </div>
                        <p class="app-section__description typo--body1">
                            Положение Совета директоров в системе органов управления ООО
                            «Газпром ЦПС» и его деятельность, регулируются внутренними
                            документами.
                        </p>
                    </header>
                </div>
            </div>
        </div>

        <!-- Реализованные проекты -->
        <?php
        $page_id = get_queried_object_id();

        $mainCards = get_posts( array(
            'numberposts' => -1,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'page',
            'post_parent' => $page_id,
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );
        foreach ($mainCards as $mainCard):
        ?>
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header text-center">
                        <h1 class="app-section__title typo--h2"><?= $mainCard->post_title; ?></h1>
                    </header>
                    <div class="projects">
                        <div class="projects__items">
                            <?php
                            $mainID = $mainCard->ID;
                            $catCards = get_posts( array(
                                'numberposts' => -1,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'post_type'   => 'page',
                                'post_parent' => $mainID,
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach ($catCards as $catCard):
                                ?>
                                <a href="<?= get_permalink($catCard->ID)?>" class="project-card">
                                    <div class="project-card__image">
                                        <img src="<?= carbon_get_post_meta($catCard->ID, 'projects_pre_img'); ?>" alt="" />
                                    </div>
                                    <div class="project-card__title typo--subtitle2">
                                        <?= $catCard->post_title; ?>
                                    </div>
                                    <div class="project-card__description">
                                        <?= $catCard->post_content; ?>
                                    </div>
                                </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endforeach;?>

    </article>
</main>

<?php get_footer();?>
