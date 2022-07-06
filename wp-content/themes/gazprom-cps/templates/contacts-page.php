<?php
/**
 * Template Name: Контакты
 * Template Post Type: page
 */

get_header();?>

<main class="app-main">
    <article class="layout-default">
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <article class="contacts">
                        <section class="contacts__info">
                            <header class="contacts__infogroup">
                                <h2 class="typo--h2">Контакты</h2>
                            </header>

                            <div class="contacts__infogroup">
                                <div class="typo--subtitle1">“Газпром ЦПС”</div>
                                <div class="typo--body2">
                                    Санкт-Петербург, пр. Добролюбова, 16 корп. 2 лит. А, БЦ
                                    "Арена Холл
                                </div>
                                <a
                                    class="link"
                                    href="https://yandex.ru/profile/1092000110"
                                    target="_blank"
                                >Смотреть на Яндекс.Картах</a
                                >
                            </div>

                            <div class="contacts__infogroup">
                                <div class="contact-item">
                                    <div class="contact-item__icon">
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M10.6181 15.3365L13.2488 12.7057L17.5963 15.7379L16.6211 16.7131C15.9715 17.3627 15.0179 17.6037 14.1377 17.3408C11.4467 16.5369 9.02929 15.063 6.88554 12.9193C4.74179 10.7755 3.26796 8.35814 2.46405 5.66711C2.20108 4.78688 2.44207 3.83334 3.09167 3.18374L4.06692 2.2085L7.09907 6.55601L4.46836 9.18673"
                                                stroke="#0968C0"
                                                stroke-linecap="round"
                                            />
                                        </svg>
                                    </div>
                                    <div class="contact-item__value">
                                        <a href="tel:+78129357052">8(812)935-70-52</a>
                                    </div>
                                    <div class="contact-item__descr">
                                        Звонок по России бесплатный
                                    </div>
                                </div>
                            </div>

                            <div class="contacts__infogroup">
                                <div class="contact-item">
                                    <div class="contact-item__icon">
                                        <svg
                                            width="20"
                                            height="20"
                                            viewBox="0 0 20 20"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M18.3327 4.1665H1.66602V15.8332H18.3327V4.1665Z"
                                                stroke="#0968C0"
                                                stroke-linecap="square"
                                            />
                                            <path
                                                d="M1.66602 4.1665L9.99935 11.6665L18.3327 4.1665"
                                                stroke="#0968C0"
                                                stroke-linecap="round"
                                            />
                                        </svg>
                                    </div>
                                    <div class="contact-item__value">
                                        <a href="mailto:info@gazpromcps.ru"
                                        >info@gazpromcps.ru</a
                                        >
                                    </div>
                                    <div class="contact-item__descr">Пишите нам письма</div>
                                </div>
                            </div>
                        </section>
                        <aside class="contacts__map">
                            <picture>
                                <source
                                    srcset="<?= get_template_directory_uri(); ?>/assets/images/contacts-map.png"
                                    loading="lazy"
                                    media="(min-width: 768px)"
                                />
                                <img
                                    src="<?= get_template_directory_uri(); ?>/assets/images/contacts-map-small.png"
                                    loading="lazy"
                                    alt=""
                                />
                            </picture>
                        </aside>
                    </article>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer();?>
