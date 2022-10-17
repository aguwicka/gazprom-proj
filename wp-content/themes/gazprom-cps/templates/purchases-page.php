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
            url: '?procedure%5Bcategory%5D=archive&search=газпром+цпс'
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
                            <?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
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
