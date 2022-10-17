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
                            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content(); ?>
                        </div>
                        <?php $file = carbon_get_the_post_meta( 'crb_header_file' );
                        if($file):
                        $filetype = wp_check_filetype(wp_get_attachment_url($file));?>
                        <div class="app-file">
                            <div class="app-file__format"><?= $filetype['ext']; ?></div>
                            <div class="app-file__name"><?= get_the_title($file);?></div>
                            <a href="<?= wp_get_attachment_url($file);?>" class="app-file__action">Смотреть</a>
                        </div>
                        <?php endif;?>
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
                                <?php if($companyCard['crb_image']):?>
                                <div class="stat-card__icon">
                                    <img src="<?= $companyCard['crb_image']; ?>" alt="">
                                </div>
                                <?php endif;?>
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
                                <?php if($companyService['crb_image']):?>
                                    <div class="stat-card__icon">
                                        <img src="<?= $companyService['crb_image']; ?>" alt="">
                                    </div>
                                <?php endif;?>
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
