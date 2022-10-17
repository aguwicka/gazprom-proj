<?php
/**
 * Template Name: Клиенты
 * Template Post Type: page
 */

get_header(); ?>

<main class="app-main">
    <article class="layout-default">
        <div
                class="app-section as-banner"
                style="--app-section-bg: url('<?= wp_get_attachment_url(get_post_thumbnail_id()); ?>')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">

                        <h1 class="app-section__title typo--h1"><?php the_title(); ?></h1>
                        <?php if (carbon_get_the_post_meta('crb_subtitle')): ?>
                            <div class="app-section__pretitle typo--secondary">
                                <?= carbon_get_the_post_meta('crb_subtitle'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="app-section__description typo--body1">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    the_content();
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </header>
                </div>
            </div>
        </div>
        <?php if (carbon_get_the_post_meta('crb_customers')): ?>
            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <div class="customers">
                            <div class="customers__items">
                                <?php
                                $cards = carbon_get_the_post_meta('crb_customers');

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
                                        <?php if ($card['crb_association']): ?>
                                            <div class="customer-card__summary">
                                                <div
                                                        class="customer-card__projects-modal-link modal-link"
                                                        tabindex="-1"
                                                >
                                                    <div class="modal-link__name">
                                                        <div class="case">
                                                            <div class="case__value"><?= (count(
                                                                    $card['crb_association']
                                                                    ) ) ?></div>
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
        <?php $mails = carbon_get_the_post_meta('crb_good_mail');
        if ($mails):
            ?>
            <section class="app-section is-dark">
                <div class="container">
                    <div class="app-section__content">
                        <header class="app-section__header">
                            <h1 class="app-section__title typo--h2">
                                Благодарственные письма
                            </h1>
                        </header>
                        <div class="thx-letters">
                            <div class="thx-letters__items">
                                <?php
                                foreach ($mails as $mail):
                                    ?>
                                    <figure class="card-img">
                                        <?php if ($mail['crb_image']): ?>
                                            <div class="card-img__media-wrap">
                                                <a href="<?= $mail['crb_image']; ?>" data-lightbox="letters">
                                                    <img
                                                            class="card-img__media"
                                                            src="<?= $mail['crb_image']; ?>"
                                                            alt=""
                                                    />
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($mail['crb_name'] && $mail['crb_content']): ?>
                                            <figcaption class="card-img__caption">
                                                <div class="card-img__caption-title typo--subtitle2">
                                                    <?= $mail['crb_name']; ?>
                                                </div>
                                                <div class="card-img__caption-text typo--body2">
                                                    <?= $mail['crb_content']; ?>
                                                </div>
                                            </figcaption>
                                        <?php endif; ?>
                                    </figure>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </article>
</main>

<?php get_footer() ?>
