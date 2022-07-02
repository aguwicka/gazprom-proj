<?php
/**
 * Template Name: О компании
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
                            Компания / о компании
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content(); ?>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <!-- История компании -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('company_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('company_title'); ?></h1>
                        <?php endif;?>

                        <?php if(carbon_get_the_post_meta('company_content')):?>
                        <div class="app-section__description">
                            <?= wpautop(carbon_get_the_post_meta('company_content')); ?>
                        </div>
                        <?php endif;?>
                    </header>
                    <?php if(carbon_get_the_post_meta( 'crb_company' )):?>
                    <div class="stats bg--soft">
                        <div class="stats__items">
                            <?php
                            $companyCards = carbon_get_the_post_meta( 'crb_company' );

                            foreach ($companyCards as $companyCard):

                            ?>
                            <div class="stat-card">
                                <div class="stat-card__icon">
                                    <svg
                                        width="52"
                                        height="52"
                                        viewBox="0 0 52 52"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M5.06299 21.0936H10.9692V36.2811H6.75049C6.52671 36.2811 6.3121 36.37 6.15387 36.5283C5.99563 36.6865 5.90674 36.9011 5.90674 37.1249C5.90674 37.3487 5.99563 37.5633 6.15387 37.7215C6.3121 37.8798 6.52671 37.9686 6.75049 37.9686H47.2505C47.4743 37.9686 47.6889 37.8798 47.8471 37.7215C48.0053 37.5633 48.0942 37.3487 48.0942 37.1249C48.0942 36.9011 48.0053 36.6865 47.8471 36.5283C47.6889 36.37 47.4743 36.2811 47.2505 36.2811H43.0317V21.0936H48.938C49.1217 21.0936 49.3004 21.0337 49.4469 20.9229C49.5934 20.8121 49.6998 20.6565 49.7498 20.4797C49.7999 20.303 49.7908 20.1147 49.7241 19.9436C49.6574 19.7724 49.5367 19.6277 49.3803 19.5314L27.4428 6.03139C27.3097 5.94957 27.1566 5.90625 27.0005 5.90625C26.8443 5.90625 26.6912 5.94957 26.5582 6.03139L4.62072 19.5314C4.46428 19.6277 4.34353 19.7724 4.27683 19.9436C4.21013 20.1147 4.20112 20.303 4.25115 20.4797C4.30119 20.6565 4.40755 20.8121 4.55408 20.9229C4.7006 21.0337 4.87929 21.0936 5.06299 21.0936ZM12.6567 21.0936H21.0942V36.2811H12.6567V21.0936ZM31.2192 21.0936V36.2811H22.7817V21.0936H31.2192ZM41.3442 36.2811H32.9067V21.0936H41.3442V36.2811ZM27.0005 7.74052L45.9571 19.4061H8.04392L27.0005 7.74052ZM51.4692 43.8749C51.4692 44.0987 51.3803 44.3133 51.2221 44.4715C51.0639 44.6297 50.8493 44.7186 50.6255 44.7186H3.37549C3.15171 44.7186 2.9371 44.6297 2.77887 44.4715C2.62063 44.3133 2.53174 44.0987 2.53174 43.8749C2.53174 43.6511 2.62063 43.4365 2.77887 43.2783C2.9371 43.12 3.15171 43.0311 3.37549 43.0311H50.6255C50.8493 43.0312 51.0639 43.1201 51.2221 43.2783C51.3803 43.4365 51.4692 43.6511 51.4692 43.8749Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </div>
                                <?php if($companyCard['crb_title']):?>
                                <div class="stat-card__value typo--h2"><?= $companyCard['crb_title'];?></div>
                                <?php endif;?>

                                <?php if($companyCard['crb_subtext']):?>
                                <div class="stat-card__value-unit"><?= $companyCard['crb_subtext'];?></div>
                                <?php endif;?>

                                <?php if($companyCard['crb_content']):?>
                                <div class="stat-card__description">
                                    <?= $companyCard['crb_content'];?>
                                </div>
                                <?php endif;?>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                    <?php endif;?>
                    <?php if(carbon_get_the_post_meta('company_img')):?>
                    <div class="just-media">
                        <img src="<?= carbon_get_the_post_meta('company_img'); ?>" alt="" />
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <!-- Задачи -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('task_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('task_title'); ?></h1>
                        <?php endif;?>
                        <?php if(carbon_get_the_post_meta('task_content')):?>
                        <p class="app-section__description">
                            <?= carbon_get_the_post_meta('task_content'); ?>
                        </p>
                        <?php endif;?>
                    </header>
                    <?php if(carbon_get_the_post_meta('crb_tasks')):?>
                    <ul class="list">
                        <?php
                        $companyTasks = carbon_get_the_post_meta( 'crb_tasks' );

                        foreach ($companyTasks as $companyTask):
                        ?>
                        <li>
                            <?= $companyTask['crb_list'];?>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <!-- География сервисов -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('services_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('services_title'); ?></h1>
                        <?php endif;?>
                        <?php if(carbon_get_the_post_meta('services_content')):?>
                        <p class="app-section__description color--secondary">
                            <?= carbon_get_the_post_meta('services_content'); ?>
                        </p>
                        <?php endif;?>
                    </header>
                    <!-- ЗДЕСЬ ДОЛЖНА БЫТЬ КАРТА-КАРТИНКА -->
                    <?php if(carbon_get_the_post_meta('services_img')):?>
                    <div class="just-media">
                        <img src="<?= carbon_get_the_post_meta('services_img'); ?>" alt="" />
                    </div>
                    <?php endif;?>
                    <?php if(carbon_get_the_post_meta('crb_services')):?>
                    <div class="stats">
                        <div class="stats__items">
                            <?php
                            $companyServices = carbon_get_the_post_meta( 'crb_services' );

                            foreach ($companyServices as $companyService):
                            ?>
                            <div class="stat-card">
                                <div class="stat-card__icon">
                                    <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.06299 21.0936H10.9692V36.2811H6.75049C6.52671 36.2811 6.3121 36.37 6.15387 36.5283C5.99563 36.6865 5.90674 36.9011 5.90674 37.1249C5.90674 37.3487 5.99563 37.5633 6.15387 37.7215C6.3121 37.8798 6.52671 37.9686 6.75049 37.9686H47.2505C47.4743 37.9686 47.6889 37.8798 47.8471 37.7215C48.0053 37.5633 48.0942 37.3487 48.0942 37.1249C48.0942 36.9011 48.0053 36.6865 47.8471 36.5283C47.6889 36.37 47.4743 36.2811 47.2505 36.2811H43.0317V21.0936H48.938C49.1217 21.0936 49.3004 21.0337 49.4469 20.9229C49.5934 20.8121 49.6998 20.6565 49.7498 20.4797C49.7999 20.303 49.7908 20.1147 49.7241 19.9436C49.6574 19.7724 49.5367 19.6277 49.3803 19.5314L27.4428 6.03139C27.3097 5.94957 27.1566 5.90625 27.0005 5.90625C26.8443 5.90625 26.6912 5.94957 26.5582 6.03139L4.62072 19.5314C4.46428 19.6277 4.34353 19.7724 4.27683 19.9436C4.21013 20.1147 4.20112 20.303 4.25115 20.4797C4.30119 20.6565 4.40755 20.8121 4.55408 20.9229C4.7006 21.0337 4.87929 21.0936 5.06299 21.0936ZM12.6567 21.0936H21.0942V36.2811H12.6567V21.0936ZM31.2192 21.0936V36.2811H22.7817V21.0936H31.2192ZM41.3442 36.2811H32.9067V21.0936H41.3442V36.2811ZM27.0005 7.74052L45.9571 19.4061H8.04392L27.0005 7.74052ZM51.4692 43.8749C51.4692 44.0987 51.3803 44.3133 51.2221 44.4715C51.0639 44.6297 50.8493 44.7186 50.6255 44.7186H3.37549C3.15171 44.7186 2.9371 44.6297 2.77887 44.4715C2.62063 44.3133 2.53174 44.0987 2.53174 43.8749C2.53174 43.6511 2.62063 43.4365 2.77887 43.2783C2.9371 43.12 3.15171 43.0311 3.37549 43.0311H50.6255C50.8493 43.0312 51.0639 43.1201 51.2221 43.2783C51.3803 43.4365 51.4692 43.6511 51.4692 43.8749Z" fill="currentColor"/>
                                    </svg>

                                </div>
                                <?php if($companyService['crb_title']):?>
                                <div class="stat-card__value typo--h2"><?= $companyService['crb_title'];?></div>
                                <?php endif;?>
                                <?php if($companyService['crb_content']):?>
                                <div class="stat-card__value-unit"><?= $companyService['crb_content'];?></div>
                                <?php endif;?>
                                <div class="stat-card__description">
                                </div>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <!-- Направления -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <div class="directions">
                        <div class="directions__items">

                            <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'post_type'   => 'page',
                                'post_parent' => 22,
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach ($posts as $post):
                                ?>
                                <section class="direction-card">
                                    <?php if(carbon_get_post_meta($post->ID, 'direction_main_img')):?>
                                        <div class="direction-card__image">
                                            <img src="<?= carbon_get_post_meta($post->ID, 'direction_main_img'); ?>" alt="" />
                                        </div>
                                    <?php endif;?>
                                    <?php if(carbon_get_post_meta($post->ID, 'direction_tag')):?>
                                        <div class="direction-card__pretitle typo--secondary">
                                            <?= carbon_get_post_meta($post->ID, 'direction_tag'); ?>
                                        </div>
                                    <?php endif;?>
                                    <div class="direction-card__title typo--subtitle3">
                                        <?= $post->post_title;?>
                                    </div>
                                    <div class="direction-card__description">
                                        <?= $post->post_content;?>
                                    </div>
                                    <div class="direction-card__arrow">
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
                                    </div>
                                    <a
                                            href="<?= get_permalink($post->ID);?>"
                                            class="direction-card__link"
                                    ></a>
                                </section>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Популярные разделы -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">Популярные разделы</h1>
                    </header>
                    <div class="parts has-small-cards">
                        <div class="parts__items">
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(5)); ?>" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(5);?>" class="part-card__title"><?=  get_the_title( 5 )?></a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(29)); ?>" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(29);?>" class="part-card__title"><?=  get_the_title( 29 )?></a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="<?= wp_get_attachment_url(get_post_thumbnail_id(79)); ?>" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="<?php the_permalink(79);?>" class="part-card__title"><?=  get_the_title( 79 )?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
