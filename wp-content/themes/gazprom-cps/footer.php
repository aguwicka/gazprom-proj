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

                    <div class="app-footer__group">
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
                    </div>
                </div>

                <div class="app-footer__col">
                    <div class="app-footer__group">
                        <span href="#" class="app-footer__link">“Газпром ЦПС”</span>
                        <p>
                            Санкт-Петербург, пр. Добролюбова, 16 корп. 2 лит. А, БЦ
                            "Арена Холл"
                        </p>
                        <a href="#" class="app-footer__link is-external"
                        >Смотреть на Яндекс.Картах</a
                        >
                    </div>

                    <div class="app-footer__group">
                        <a href="#" class="app-footer__link">8 (812) 935-70-52</a>
                        <p>Звонок по России бесплатный</p>
                    </div>

                    <div class="app-footer__group">
                        <a href="#" class="app-footer__link">info@gazpromcps.ru</a>
                        <p>Пишите нам письма</p>
                    </div>

                    <div class="app-footer__group">
                        <a href="#" class="link like-button">Обратная связь</a>
                    </div>

                    <div class="app-footer__group group-social">
                        <a href="" class="app-footer__social-link">
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

                        <a href="" class="app-footer__social-link">
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