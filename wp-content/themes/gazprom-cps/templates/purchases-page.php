<?php
/**
 * Template Name: Закупки
 * Template Post Type: page
 */

get_header();?>
<script type='text/javascript' src='https://etpgpb.ru/procedures_widget/procedures.js' charset='UTF-8'></script>
<script type='text/javascript'>
    document.addEventListener('DOMContentLoaded', function() {
        ETPGPB.renderProcedures({
            selector: '#procedures',
            template: 'light',
            mode: 'normal',
            url: '?procedure%5Bcategory%5D=actual&procedure%5Bcustomers%5D%5B7118%5D=%D0%93%D0%90%D0%97%D0%9F%D0%A0%D0%9E%D0%9C%20%D0%A6%D0%9F%D0%A1'
        })

    });
</script>
<main class="app-main">
    <article class="layout-default">
        <div
                class="app-section as-banner"
                style="--app-section-bg: url('<?= wp_get_attachment_url(get_post_thumbnail_id()); ?>')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1">
                            <?php the_title();?>
                        </h1>
                        <div class="app-section__pretitle typo--secondary">
                            Компания / Закупки
                        </div>
                        <p class="app-section__description typo--body1">
                            <?php the_content();?>
                        </p>
                    </header>
                </div>
            </div>
        </div>
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <div id='procedures'></div>
                </div>
            </div>
        </section>

    </article>
</main>


<?php get_footer(); ?>
