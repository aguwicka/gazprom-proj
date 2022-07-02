<?php
/**
 * Template Name: Миссия и ценности
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
                        <h1 class="app-section__title typo--h1"><?= the_title();?></h1>
                        <div class="app-section__pretitle typo--secondary">
                            Компания
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content();?>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <!-- Наша миссия -->
        <section class="app-section is-dark">
            <div class="container">
                <div class="app-section__content">
                    <div class="goals">
                        <div class="goals__items">
                            <div class="goal-card">
                                <div class="goal-card__icon">
                                    <svg
                                        width="54"
                                        height="54"
                                        viewBox="0 0 54 54"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M48.0937 43.875C48.0937 44.0988 48.0048 44.3134 47.8466 44.4716C47.6884 44.6298 47.4738 44.7187 47.25 44.7188H6.75C6.52623 44.7187 6.31162 44.6298 6.15339 44.4716C5.99516 44.3134 5.90626 44.0988 5.90625 43.875V10.125C5.90625 9.90122 5.99514 9.68661 6.15338 9.52838C6.31161 9.37015 6.52622 9.28125 6.75 9.28125C6.97378 9.28125 7.18839 9.37015 7.34662 9.52838C7.50486 9.68661 7.59375 9.90122 7.59375 10.125V35.0888L19.6541 23.0284C19.7324 22.9501 19.8254 22.8879 19.9277 22.8455C20.0301 22.8031 20.1398 22.7813 20.2506 22.7813C20.3614 22.7813 20.4711 22.8031 20.5735 22.8455C20.6758 22.8879 20.7688 22.9501 20.8472 23.0284L27.0006 29.1817L41.8386 14.3438H35.4381C35.2143 14.3438 34.9997 14.2549 34.8415 14.0966C34.6833 13.9384 34.5944 13.7238 34.5944 13.5C34.5944 13.2762 34.6833 13.0616 34.8415 12.9034C34.9997 12.7451 35.2143 12.6562 35.4381 12.6562H43.8756C43.8774 12.6562 43.879 12.6568 43.8809 12.6568C43.9345 12.6571 43.9881 12.6625 44.0407 12.6729C44.0658 12.6779 44.089 12.6873 44.1133 12.6944C44.1421 12.7017 44.1705 12.7105 44.1984 12.7208C44.2257 12.7333 44.2523 12.7473 44.278 12.7627C44.3 12.7747 44.3226 12.7843 44.3436 12.7983C44.4361 12.8601 44.5155 12.9396 44.5773 13.0321C44.591 13.0526 44.6003 13.0746 44.612 13.0959C44.6278 13.1223 44.6421 13.1494 44.6549 13.1773C44.6652 13.2052 44.674 13.2337 44.6813 13.2626C44.6884 13.2867 44.6977 13.3098 44.7027 13.3348C44.7137 13.3892 44.7193 13.4445 44.7194 13.5V21.9375C44.7194 22.1613 44.6305 22.3759 44.4722 22.5341C44.314 22.6924 44.0994 22.7812 43.8756 22.7812C43.6518 22.7812 43.4372 22.6924 43.279 22.5341C43.1208 22.3759 43.0319 22.1613 43.0319 21.9375V15.5369L27.5972 30.9716C27.5188 31.0499 27.4258 31.1121 27.3235 31.1545C27.2211 31.1969 27.1114 31.2188 27.0006 31.2188C26.8898 31.2188 26.7801 31.1969 26.6777 31.1545C26.5754 31.1121 26.4824 31.0499 26.4041 30.9716L20.2506 24.8183L7.59375 37.475V43.0312H47.25C47.4738 43.0313 47.6884 43.1202 47.8466 43.2784C48.0048 43.4366 48.0937 43.6512 48.0937 43.875Z"
                                            fill="currentColor"
                                        />
                                    </svg>
                                </div>
                                <?php if(carbon_get_the_post_meta('mission_title')):?>
                                <div class="goal-card__title typo--h2"><?= carbon_get_the_post_meta('mission_title'); ?></div>
                                <?php endif;?>
                                <?php if(carbon_get_the_post_meta('mission_content')):?>
                                <div class="goal-card__description">
                                    <?= carbon_get_the_post_meta('mission_content'); ?>
                                </div>
                                <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ценности -->
        <section class="app-section is-dark">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <?php if(carbon_get_the_post_meta('values_title')):?>
                        <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('values_title'); ?></h1>
                        <?php endif;?>
                        <?php if(carbon_get_the_post_meta('values_content')):?>
                        <p class="app-section__description color--secondary">
                            <?= carbon_get_the_post_meta('values_content'); ?>
                        </p>
                        <?php endif;?>
                    </header>
                    <?php if(carbon_get_the_post_meta('crb_values')):?>
                    <div class="features">
                        <div class="features__items">

                            <?php
                            $missionCards = carbon_get_the_post_meta( 'crb_values' );

                            foreach ($missionCards as $missionCard):
                            ?>
                            <div class="feature-card">
                                <?php if($missionCard['direction_img']):?>
                                <div class="feature-card__icon">
                                    <img src="<?= $missionCard['direction_img'];?>" alt="">
                                </div>
                                <?php endif;?>
                                <?php if($missionCard['crb_title']):?>
                                <div class="feature-card__title typo--subtitle2">
                                    <?= $missionCard['crb_title'];?>
                                </div>
                                <?php endif;?>
                                <?php if($missionCard['crb_content']):?>
                                <div class="feature-card__description">
                                    <?= $missionCard['crb_content'];?>
                                </div>
                                <?php endif;?>
                            </div>
                            <?php endforeach;?>

                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <!-- Популярные разделы -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">
                            Популярные разделы
                        </h1>
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
