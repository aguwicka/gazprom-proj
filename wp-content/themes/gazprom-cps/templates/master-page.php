<?php
/**
 * Template Name: Мастер страниц
 * Template Post Type: page
 */

get_header(); ?>

<main class="app-main">
    <article class="layout-default">
        <div
                class="app-section as-banner"
                style="--app-section-bg: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1"><?php the_title(); ?></h1>
                        <div class="app-section__pretitle typo--secondary">
                            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
                        </div>
                        <div class="app-section__description typo--body1">
                            <?php the_content(); ?>
                        </div>
                    </header>
                </div>
            </div>
        </div>

        <?php if (carbon_get_the_post_meta('crb_customers_master')): ?>
            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <div class="customers">
                            <div class="customers__items">
                                <?php
                                $cards = carbon_get_the_post_meta('crb_customers_master');

                                foreach ($cards as $card):
                                    ?>
                                    <div class="customer-card">
                                        <div class="customer-card__logo">
                                            <img src="<?= $card['crb_image']; ?>" alt="">
                                        </div>
                                        <div class="customer-card__title typo--subtitle2"><?= $card['crb_name']; ?></div>
                                        <p class="customer-card__description">
                                            <?= $card['crb_content']; ?>
                                        </p>
                                        <a href="<?= $card['crb_link']; ?>" class="customer-card__link link"
                                        >Сайт компании</a
                                        >
                                        <?php if ($card['crb_association_master']): ?>
                                            <div class="customer-card__summary">
                                                <div
                                                        class="customer-card__projects-modal-link modal-link"
                                                        tabindex="-1"
                                                >
                                                    <div class="modal-link__name">
                                                        <div class="case">
                                                            <div class="case__value"><?= (count(
                                                                    $card['crb_association_master']
                                                                )) ?></div>
                                                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                                                 xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                      d="M16 5.75025C16 4.94335 15.7812 4.15781 15.1829 3.57956C14.5858 3.00246 13.7759 2.79156 12.9412 2.79156H12.2797C12.214 2.18852 11.9851 1.61823 11.5051 1.1837C10.9366 0.669057 10.1855 0.5 9.44828 0.5H6.54564C5.82257 0.5 5.08186 0.673701 4.51578 1.17864C4.0343 1.60811 3.7908 2.1767 3.72122 2.79156H3.05882C2.22788 2.79156 1.42023 3.00359 0.823282 3.57797C0.224343 4.15426 0 4.93874 0 5.75025V11.5413C0 12.3528 0.224343 13.1373 0.823282 13.7136C1.42023 14.288 2.22788 14.5 3.05882 14.5H12.9412C13.7759 14.5 14.5858 14.2891 15.1829 13.712C15.7812 13.1337 16 12.3482 16 11.5413V5.75025ZM1.03854 7.37269C1.39243 7.49782 1.73803 7.61051 2.07708 7.71184C3.55113 8.15234 4.90141 8.37778 6.27181 8.47406V8.93592C6.27181 9.40963 6.54564 9.66425 7.05071 9.66425H8.95538C9.45436 9.66425 9.73428 9.40963 9.73428 8.93592V8.47406C11.0997 8.37778 12.4491 8.15235 13.9229 7.71185C14.2619 7.61052 14.6076 7.49782 14.9615 7.37269V11.5413C14.9615 12.8203 14.2738 13.4894 12.9412 13.4894H3.05882C1.73834 13.4894 1.03854 12.8203 1.03854 11.5413V7.37269ZM7.31034 8.42664V8.65367H8.69574V8.42647C8.46412 8.43324 8.23218 8.43656 8 8.43656C7.76979 8.43656 7.53989 8.4333 7.31034 8.42664ZM1.03854 6.14698V5.75025C1.03854 4.47124 1.73834 3.80213 3.05882 3.80213H4.73834V3.18039C4.73834 2.05534 5.41379 1.51057 6.54564 1.51057H9.44828C10.6288 1.51057 11.2617 2.05534 11.2617 3.18039V3.80213H12.9412C14.2738 3.80213 14.9615 4.47124 14.9615 5.75025V6.14698C12.7586 7.05294 10.4097 7.42598 8 7.42598C5.59026 7.42598 3.24746 7.05294 1.03854 6.14698ZM9.8945 2.79156C9.78224 2.66645 9.60656 2.6001 9.37525 2.6001H6.62475C6.39344 2.6001 6.21776 2.66645 6.1055 2.79156C6.01102 2.89684 5.96146 3.04375 5.96146 3.22776V3.80213H10.0385V3.22776C10.0385 3.04375 9.98898 2.89684 9.8945 2.79156Z"
                                                                      fill="#0968C0"/>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <div class="modal-link__inner">
                                                        <div class="modal-link__content">
                                                            <article class="sssssss">
                                                                <header class="customer-projects__header">
                                                                    <div
                                                                            class="customer-projects__pretitle typo--secondary"
                                                                    >
                                                                        <?= $card['crb_name']; ?>
                                                                    </div>
                                                                    <h1 class="customer-projects__title typo--h2">
                                                                        Проекты
                                                                    </h1>
                                                                </header>
                                                                <div class="customer-projects__content">
                                                                    <div class="projects">
                                                                        <div class="projects__items">
                                                                            <?php foreach ($card['crb_association'] as $post_item): ?>
                                                                                <a href="<?= get_the_permalink(
                                                                                    $post_item['id']
                                                                                ); ?>"
                                                                                   class="project-card">
                                                                                    <div class="project-card__image">
                                                                                        <img
                                                                                                src="<?= wp_get_attachment_url
                                                                                                (
                                                                                                    get_post_thumbnail_id
                                                                                                    (
                                                                                                        $post_item['id']
                                                                                                    )
                                                                                                ); ?>"
                                                                                                alt=""
                                                                                        />
                                                                                    </div>
                                                                                    <div
                                                                                            class="project-card__title typo--subtitle2"
                                                                                    >
                                                                                        <?= get_the_title(
                                                                                            $post_item['id']
                                                                                        ); ?>
                                                                                    </div>
                                                                                    <div class="project-card__description">
                                                                                        <?= get_the_content(
                                                                                            $post_item['id']
                                                                                        ); ?>
                                                                                    </div>
                                                                                </a>
                                                                            <?php endforeach; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php if (carbon_get_the_post_meta('career_title') || carbon_get_the_post_meta('career_content') || carbon_get_the_post_meta('career_link_text')) : ?>
            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <header class="app-section__header">
                            <?php if (carbon_get_the_post_meta('career_title')): ?>
                                <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('career_title'); ?></h1>
                            <?php endif; ?>
                            <?php if (carbon_get_the_post_meta('career_content')): ?>
                                <p class="app-section__description">
                                    <?= carbon_get_the_post_meta('career_content'); ?>
                                </p>
                            <?php endif; ?>
                        </header>
                        <?php if (carbon_get_the_post_meta('career_content') || carbon_get_the_post_meta('career_link_text')): ?>
                            <blockquote class="speech">
                                <p class="speech__text">
                                    <?= carbon_get_the_post_meta('career_blockquote'); ?>
                                    <br/><br/>
                                    <a href="<?= carbon_get_the_post_meta('career_link'); ?>"
                                       class="link"><?= carbon_get_the_post_meta('career_link_text'); ?>
                                    </a>
                                </p>
                            </blockquote>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Вакансии -->
        <?php if (carbon_get_the_post_meta('crb_vacancies')) : ?>
            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <header class="app-section__header">
                            <?php if (carbon_get_the_post_meta('vacancies_title')): ?>
                                <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('vacancies_title'); ?></h1>
                            <?php endif; ?>
                        </header>
                        <?php if (carbon_get_the_post_meta('crb_vacancies')): ?>
                            <div class="vacancies">
                                <div class="vacancies__items">
                                    <?php
                                    $vacancies = carbon_get_the_post_meta('crb_vacancies');

                                    foreach ($vacancies as $vacancy):
                                        ?>
                                        <div class="vacancy-card">
                                            <a href="<?= $vacancy['crb_link']; ?>"
                                               class="vacancy-card__name typo--subtitle2"><?= $vacancy['crb_title']; ?></a>
                                            <div class="vacancy-card__location"><?= $vacancy['crb_subtext']; ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Мы предлагаем -->

        <?php if (carbon_get_the_post_meta('crb_sug')): ?>
            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <header class="app-section__header">
                            <?php if (carbon_get_the_post_meta('sug_title')): ?>
                                <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('sug_title'); ?></h1>
                            <?php endif; ?>
                        </header>
                        <?php if (carbon_get_the_post_meta('crb_sug')): ?>
                            <ul class="list">
                                <?php
                                $suggestions = carbon_get_the_post_meta('crb_sug');

                                foreach ($suggestions as $suggestion):
                                    ?>
                                    <li>
                                        <?= $suggestion['crb_list']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <?php if (carbon_get_the_post_meta('sug_img')): ?>
                            <div class="just-media">
                                <img src="<?= carbon_get_the_post_meta('sug_img'); ?>" alt=""/>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Наша миссия -->
        <?php if (carbon_get_the_post_meta('mission_title') || carbon_get_the_post_meta('mission_content')): ?>
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
                                    <?php if (carbon_get_the_post_meta('mission_title')): ?>
                                        <div class="goal-card__title typo--h2"><?= carbon_get_the_post_meta('mission_title'); ?></div>
                                    <?php endif; ?>
                                    <?php if (carbon_get_the_post_meta('mission_content')): ?>
                                        <div class="goal-card__description">
                                            <?= carbon_get_the_post_meta('mission_content'); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Ценности -->
        <?php if (carbon_get_the_post_meta('values_title') || carbon_get_the_post_meta('values_content') || carbon_get_the_post_meta('crb_values')) : ?>
            <section class="app-section is-dark">
                <div class="container">
                    <div class="app-section__content">
                        <header class="app-section__header">
                            <?php if (carbon_get_the_post_meta('values_title')): ?>
                                <h1 class="app-section__title typo--h2"><?= carbon_get_the_post_meta('values_title'); ?></h1>
                            <?php endif; ?>
                            <?php if (carbon_get_the_post_meta('values_content')): ?>
                                <p class="app-section__description color--secondary">
                                    <?= carbon_get_the_post_meta('values_content'); ?>
                                </p>
                            <?php endif; ?>
                        </header>
                        <?php if (carbon_get_the_post_meta('crb_values')): ?>
                            <div class="features">
                                <div class="features__items">

                                    <?php
                                    $missionCards = carbon_get_the_post_meta('crb_values');

                                    foreach ($missionCards as $missionCard):
                                        ?>
                                        <div class="feature-card">
                                            <?php if ($missionCard['direction_img']): ?>
                                                <div class="feature-card__icon">
                                                    <img src="<?= $missionCard['direction_img']; ?>" alt="">
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($missionCard['crb_title']): ?>
                                                <div class="feature-card__title typo--subtitle2">
                                                    <?= $missionCard['crb_title']; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($missionCard['crb_content']): ?>
                                                <div class="feature-card__description">
                                                    <?= $missionCard['crb_content']; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php if (carbon_get_the_post_meta('crb_directors')):?>
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <div class="company-parts">
                        <?php
                        $directors = carbon_get_the_post_meta('crb_directors');

                        foreach ($directors as $director):
                            ?>
                            <div class="pie-part" style="--value: <?= $director['crb_percent'] ?>">
                                <div class="pie-part__chart"></div>
                                <div class="pie-part__content">
                                    <div class="pie-part__value"><?= $director['crb_percent'] ?></div>
                                    <div class="pie-part__label typo--secondary"><?= $director['crb_title'] ?></div>
                                    <div class="pie-part__image">
                                        <img
                                                src="<?= $director['crb_img'] ?>"
                                                alt=""
                                        />
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php endif;?>

        <?php $mainCards = carbon_get_the_post_meta('crb_directors_cards');
        if ($mainCards):
            ?>
            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <div class="app-section__title typo--h2"><?= carbon_get_the_post_meta('directors_main_pie_title'); ?></div>
                        <div class="persons">
                            <div class="persons__items">
                                <?php
                                foreach ($mainCards as $mainCard):
                                    $leads = $mainCard['crb_modal_directors'];
                                    ?>
                                    <div class="person-card">
                                        <?php if ($mainCard['crb_img']): ?>
                                            <div class="person-card__image">
                                                <img src="<?= $mainCard['crb_img']; ?>" alt=""/>
                                            </div>
                                        <?php endif; ?>
                                        <div class="person-card__title typo--subtitle2 <?php if (!$leads) {
                                            echo 'person-card-lock';
                                        } ?>">
                                            <div class="modal-link" tabindex="-1">
                                                <div class="modal-link__name"><?= $mainCard['crb_title']; ?></div>
                                                <?php

                                                if ($leads):?>
                                                    <div class="modal-link__inner">
                                                        <div class="modal-link__content">
                                                            <article class="person">
                                                                <header class="person__header">
                                                                    <div class="person__image">
                                                                        <img
                                                                                class="person__image-media"
                                                                                src="<?= $mainCard['crb_img']; ?>;?>"
                                                                                alt=""
                                                                        />
                                                                    </div>
                                                                    <div>
                                                                        <h2 class="person__title typo--h2"><?= $mainCard['crb_title']; ?></h2>
                                                                        <div class="person__subtitle typo--body2">
                                                                            <?= $mainCard['crb_content']; ?>
                                                                        </div>
                                                                    </div>
                                                                </header>
                                                                <?php foreach ($leads as $lead):
                                                                    if ($lead['crb_modal_title'] || $lead['crb_modal_content']):
                                                                        ?>
                                                                        <section class="person__info">
                                                                            <h3 class="person__info-title typo--subtitle3"><?= $lead['crb_modal_title']; ?></h3>
                                                                            <p class="person__info-text">
                                                                                <?= $lead['crb_modal_content']; ?>
                                                                            </p>
                                                                        </section>
                                                                    <?php
                                                                    endif;
                                                                endforeach; ?>
                                                            </article>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="person-card__description">
                                            <?= $mainCard['crb_content']; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </article>
</main>

<?php get_footer(); ?>
