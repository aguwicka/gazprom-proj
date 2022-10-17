<footer class="app-footer">
    <div class="container">
        <div class="app-footer__content">
            <nav class="app-footer__nav">
                <div class="app-footer__col">
                    <?php dynamic_sidebar( 'footer_area_one' ); ?>

                    <?php dynamic_sidebar( 'footer_area_two' ); ?>
                </div>

                <div class="app-footer__col">
                    <?php dynamic_sidebar( 'footer_area_three' ); ?>

                    <?php dynamic_sidebar( 'footer_area_four' ); ?>

<!--                    <div class="app-footer__group">
                        <a href="#" class="app-footer__link">Карьера</a>
                    </div>

                    <div class="app-footer__group">
                        <a href="#" class="app-footer__link">Новости</a>
                    </div>

                    <div class="app-footer__group">
                        <a href="#" class="app-footer__link">Услуги</a>
                    </div>

                    <div class="app-footer__group">
                        <a href="#" class="app-footer__link">Закупки</a>
                    </div>-->
                </div>

                <div class="app-footer__col">
                    <div class="app-footer__group">
                        <span href="#" class="app-footer__link"><?= carbon_get_theme_option( 'crb_tagname' );?></span>
                        <p>
                            <?= carbon_get_theme_option( 'crb_tagline' );?>
                        </p>
                        <a href="<?= carbon_get_theme_option( 'crb_yandex' );?>" target="_blank" class="app-footer__link is-external"
                        >Смотреть на Яндекс.Картах</a
                        >
                    </div>

                    <div class="app-footer__group">
                        <a href="tel:<?= carbon_get_theme_option( 'crb_footer_phone' );?>" class="app-footer__link"><?= carbon_get_theme_option( 'crb_footer_phone' );?></a>
                        <!--<p>Звонок по России бесплатный</p>-->
                    </div>

                    <div class="app-footer__group">
                        <a href="mailto:<?= carbon_get_theme_option( 'crb_footer_email' );?>" class="app-footer__link"><?= carbon_get_theme_option( 'crb_footer_email' );?></a>
                        <p>Пишите нам письма</p>
                    </div>

                    <div class="app-footer__group">
                        <a href="#" class="link like-button form-button">Обратная связь</a>
                    </div>
                    <?php if (carbon_get_theme_option( 'crb_footer_youtube' ) || carbon_get_theme_option( 'crb_footer_vk' )):?>
                    <div class="app-footer__group group-social">
                        <a href="<?= carbon_get_theme_option( 'crb_footer_youtube' );?>" class="app-footer__social-link" target="_blank">
                            <svg
                                width="18"
                                height="18"
                                viewBox="0 0 18 18"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M15.75 3.75C15.75 3.75 13.5 3 9 3C4.5 3 2.25 3.75 2.25 3.75C2.25 3.75 1.5 6 1.5 9C1.5 12 2.25 14.25 2.25 14.25C2.25 14.25 4.5 15 9 15C13.5 15 15.75 14.25 15.75 14.25C15.75 14.25 16.5 12 16.5 9C16.5 6 15.75 3.75 15.75 3.75ZM7.5 11.598V6.402L12 9L7.5 11.598Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </a>

                        <a href="<?= carbon_get_theme_option( 'crb_footer_vk' );?>" class="app-footer__social-link" target="_blank">
                            <svg
                                width="18"
                                height="18"
                                viewBox="0 0 18 18"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M17.1613 13.2007C16.4874 11.988 14.7515 10.5307 14.0349 9.89658C13.8388 9.72296 13.8178 9.42258 13.9963 9.23058C15.3639 7.76096 16.4578 6.07233 16.8343 5.05196C17.0004 4.60121 16.6565 4.12496 16.172 4.12496H14.7646C14.3008 4.12496 14.0293 4.29146 13.8999 4.55658C12.7633 6.88571 11.7883 7.89371 11.1058 8.48283C10.7236 8.81283 10.1278 8.53946 10.1278 8.03733C10.1278 7.06983 10.1278 5.81921 10.1278 4.93233C10.1278 4.50221 9.77602 4.15421 9.34214 4.15421L6.77114 4.12496C6.44752 4.12496 6.26264 4.49133 6.45689 4.74821L6.88139 5.35758C7.04114 5.56871 7.12739 5.82558 7.12739 6.08921L7.12514 8.83346C7.12514 9.31083 6.54652 9.54408 6.20302 9.20958C5.04089 8.07783 4.03252 5.76671 3.66952 4.66158C3.56452 4.34171 3.26489 4.12571 2.92514 4.12496L1.53877 4.12158C1.01864 4.12158 0.638391 4.61471 0.779766 5.11121C2.04652 9.55758 4.64564 13.7876 9.27764 14.2462C9.73402 14.2912 10.1278 13.9237 10.1278 13.4688V12.0266C10.1278 11.613 10.4521 11.2575 10.8691 11.247C10.8838 11.2466 10.8984 11.2466 10.913 11.2466C12.1381 11.2466 13.5103 13.0297 13.9903 13.8637C14.1283 14.1037 14.3863 14.25 14.6653 14.25H16.5301C17.0743 14.25 17.4234 13.6728 17.1613 13.2007Z"
                                    fill="currentColor"
                                />
                            </svg>
                        </a>
                    </div>
                    <?php endif;?>
                </div>
            </nav>
            <div class="app-footer__copyright">
                <div>
                    <span class="color--secondary">© 2022 г.</span>
                    <span class="color--secondary">ООО "Газпром ЦПС"</span>
                </div>
                <div class="for-cookies">
                    <a href="" class="app-footer__link"
                    >Политика использования Cookies</a
                    >
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="app-modal">
    <div class="app-modal__inner">
        <div class="app-modal__close">
            <svg
                    width="16"
                    height="16"
                    viewBox="0 0 16 16"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
            >
                <g clip-path="url(#clip0_3010_29262)">
                    <path
                            d="M7.99903 9.41422L15.7772 17.1924L17.1914 15.7782L9.41324 8L17.1914 0.221831L15.7772 -1.19238L7.99903 6.58579L0.220855 -1.19238L-1.19336 0.221832L6.58482 8.00001L-1.19336 15.7782L0.220855 17.1924L7.99903 9.41422Z"
                            fill="#0E2C40"
                    />
                </g>
                <defs>
                    <clipPath id="clip0_3010_29262">
                        <rect width="16" height="16" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="app-form" data-form="feedback">
            <div class="app-form__image">
                <img src="<?= get_template_directory_uri();?>/assets/images/Rectangle262.png" alt="" />
            </div>
            <?= do_shortcode('[contact-form-7 id="897" title="Форма"]')?>
        </div>
        <div class="success-banner">
            <svg width="124" height="208" viewBox="0 0 124 208" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M114.332 37.7046C109.941 18.3263 98.9132 2.57925 97.4439 0C90.7026 10.1973 85.4212 21.296 81.7544 32.9703C77.2743 48.3806 75.9415 64.5419 77.8363 80.4828C79.2713 90.9507 81.9591 101.206 85.8415 111.027C88.918 118.431 92.8097 125.466 97.4439 132C102.24 125.722 113.302 107.022 116.731 82.57C118.673 68.978 118.757 57.0829 114.332 37.7046ZM97.4439 127.266C93.6505 119.857 91.6485 111.654 91.6004 103.323C91.5942 95.0358 93.6246 86.8756 97.5114 79.5665C101.03 86.6153 102.967 94.354 103.186 102.237C103.421 110.935 101.445 119.549 97.4439 127.266V127.266ZM113.066 70.59C113.002 77.2608 112.295 83.9097 110.955 90.4435C111.239 80.9758 110.434 71.5068 108.557 62.2244C106.716 53.3837 101.514 38.587 97.3594 31.6807C93.5088 38.1797 88.7969 50.9742 86.3143 62.0717C84.5108 71.4754 83.6508 81.0371 83.7473 90.6132C82.2316 81.4766 81.615 72.2122 81.9064 62.9541C82.3696 54.4715 83.711 46.0605 85.909 37.8573C88.6851 28.2987 92.5084 19.0791 97.3088 10.3679C102.239 18.9211 106.134 28.0357 108.911 37.5179C111.822 48.2938 113.22 59.4254 113.066 70.59V70.59Z" fill="#2177C6"/>
                <path d="M105.089 136H71.6961V158.517V158.415C73.5077 156.29 75.7369 154.564 78.244 153.346C80.751 152.127 83.4817 151.443 86.2647 151.335C89.0477 151.227 91.8228 151.698 94.4159 152.718C97.0091 153.739 99.3642 155.287 101.334 157.265C103.303 159.244 104.844 161.61 105.86 164.215C106.876 166.82 107.345 169.608 107.237 172.404C107.13 175.2 106.448 177.943 105.235 180.461C104.022 182.98 102.304 185.22 100.189 187.039L100.088 187.141L99.9698 187.259C95.2749 191.942 89.5032 195.39 83.1656 197.298C76.828 199.206 70.1199 199.515 63.6351 198.198C57.1503 196.88 51.0889 193.977 45.9872 189.745C40.8856 185.513 36.9011 180.083 34.3865 173.935C31.8719 167.787 30.9047 161.111 31.5705 154.499C32.2363 147.886 34.5146 141.54 38.2037 136.023C41.8928 130.505 46.879 125.986 52.7208 122.867C58.5627 119.747 65.0801 118.122 71.6961 118.135V64C59.8083 63.9956 48.1061 66.9619 37.6435 72.6318C27.1809 78.3017 18.2865 86.4971 11.7614 96.4799C5.23628 106.463 1.28544 117.919 0.264705 129.818C-0.756033 141.716 1.18539 153.683 5.91412 164.64C10.6428 175.597 18.0104 185.201 27.3531 192.585C36.6958 199.97 47.7202 204.904 59.4335 206.943C71.1467 208.982 83.1809 208.062 94.4521 204.265C105.723 200.469 115.877 193.916 124 185.195V136H105.089Z" fill="#2177C6"/>
            </svg>
            <h4 class="success-banner-title">Спасибо!</h4>
            <p class="success-banner-desc">ваша заявка отправлена, мы связемся<br> с вами в скором времени</p>
        </div>
    </div>
</div>

</div>
<?php wp_footer();?>
<script>
    // Инициализация слайдера
    $(".js-slider-mainpage").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        fade: true,
        arrows: true,
        prevArrow: ".js-slider-pager-prev",
        nextArrow: ".js-slider-pager-next",
        autoplaySpeed: 5000,
    });
</script>
</body>
</html>