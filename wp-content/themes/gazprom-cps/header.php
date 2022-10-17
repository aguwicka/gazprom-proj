<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php bloginfo('name'); ?></title>
    <link rel="apple-touch-icon" sizes="57x57"
          href="/wp-content/themes/gazprom-cps/layout/apple-icon-57x57.pngx57.png"/>
    <link rel="apple-touch-icon" sizes="60x60"
          href="/wp-content/themes/gazprom-cps/layout/apple-icon-60x60.pngx60.png"/>
    <link rel="apple-touch-icon" sizes="72x72"
          href="/wp-content/themes/gazprom-cps/layout/apple-icon-72x72.pngx72.png"/>
    <link rel="apple-touch-icon" sizes="76x76"
          href="/wp-content/themes/gazprom-cps/layout/apple-icon-76x76.pngx76.png"/>
    <link
            rel="apple-touch-icon"
            sizes="114x114"
            href="/wp-content/themes/gazprom-cps/layout/apple-icon-114x114.png114.png"
    />
    <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="/wp-content/themes/gazprom-cps/layout/apple-icon-120x120.png120.png"
    />
    <link
            rel="apple-touch-icon"
            sizes="144x144"
            href="/wp-content/themes/gazprom-cps/layout/apple-icon-144x144.png144.png"
    />
    <link
            rel="apple-touch-icon"
            sizes="152x152"
            href="/wp-content/themes/gazprom-cps/layout/apple-icon-152x152.png152.png"
    />
    <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="/wp-content/themes/gazprom-cps/layout/apple-icon-180x180.png180.png"
    />
    <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="/wp-content/themes/gazprom-cps/layout/android-icon-192x192.png"
    />
    <link rel="icon" type="image/png" sizes="32x32"
          href="/wp-content/themes/gazprom-cps/layout/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="96x96"
          href="/wp-content/themes/gazprom-cps/layout/favicon-96x96.png"/>
    <link rel="icon" type="image/png" sizes="16x16"
          href="/wp-content/themes/gazprom-cps/layout/favicon-16x16.png"/>
    <link rel="manifest" href="/wp-content/themes/gazprom-cps/layout/manifest.json"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png"/>
    <meta name="theme-color" content="#ffffff"/>
    <?php wp_head(); ?>
</head>
<body class="app color--primary typo--body2">
<!-- Preloader -->
<div class="app-preloader is-disabled">
    <div class="app-preloader__image">
        <svg xmlns="http://www.w3.org/2000/svg" width="251" height="124" viewBox="0 0 251 124" fill="none">
            <path d="M68.9997 22.22C66.3997 10.8 59.8697 1.52 58.9997 0C55.0081 6.00948 51.8809 12.5501 49.7097 19.43C47.0569 28.5115 46.2678 38.0357 47.3897 47.43C48.2394 53.5989 49.8309 59.6427 52.1297 65.43C53.9514 69.7934 56.2558 73.9392 58.9997 77.79C61.8397 74.09 68.3897 63.07 70.4197 48.66C71.5697 40.65 71.6197 33.64 68.9997 22.22ZM58.9997 75C56.7536 70.6339 55.5682 65.7999 55.5397 60.89C55.536 56.0064 56.7383 51.1974 59.0397 46.89C61.1234 51.044 62.2704 55.6045 62.3997 60.25C62.5391 65.3758 61.3689 70.4525 58.9997 75V75ZM68.2497 41.6C68.2117 45.5312 67.7931 49.4495 66.9997 53.3C67.1678 47.7205 66.6913 42.1402 65.5797 36.67C64.4897 31.46 61.4097 22.74 58.9497 18.67C56.6697 22.5 53.8797 30.04 52.4097 36.58C51.3418 42.1217 50.8326 47.7566 50.8897 53.4C49.9922 48.0156 49.6271 42.5559 49.7997 37.1C50.0739 32.1011 50.8682 27.1443 52.1697 22.31C53.8135 16.6769 56.0773 11.2437 58.9197 6.11C61.8391 11.1505 64.1455 16.522 65.7897 22.11C67.5133 28.4604 68.3414 35.0205 68.2497 41.6V41.6Z"
                  fill="#0070BA"/>
            <path d="M63.3902 80.4506H43.5602V93.7606V93.7006C44.636 92.4444 45.9598 91.4242 47.4486 90.7039C48.9374 89.9836 50.5589 89.5789 52.2116 89.515C53.8642 89.4512 55.5122 89.7297 57.0521 90.333C58.592 90.9363 59.9906 91.8514 61.16 93.0208C62.3295 94.1903 63.2446 95.5889 63.8479 97.1288C64.4512 98.6687 64.7296 100.317 64.6658 101.969C64.602 103.622 64.1972 105.243 63.4769 106.732C62.7566 108.221 61.7364 109.545 60.4802 110.621L60.4202 110.681L60.3502 110.751C57.5622 113.519 54.1347 115.557 50.3712 116.685C46.6077 117.813 42.6242 117.995 38.7733 117.216C34.9224 116.438 31.3229 114.721 28.2933 112.22C25.2638 109.718 22.8976 106.508 21.4044 102.874C19.9111 99.2404 19.3367 95.2943 19.7321 91.3854C20.1275 87.4765 21.4804 83.7253 23.6712 80.4639C25.8619 77.2025 28.8229 74.5315 32.292 72.6873C35.7611 70.8431 39.6314 69.8825 43.5602 69.8906V37.8906C36.5008 37.888 29.5516 39.6414 23.3385 42.993C17.1254 46.3445 11.8436 51.1889 7.96872 57.0899C4.09387 62.9908 1.74772 69.7629 1.14157 76.7962C0.535414 83.8296 1.68831 90.9033 4.4964 97.3801C7.3045 103.857 11.6796 109.534 17.2276 113.899C22.7757 118.264 29.3224 121.181 36.2782 122.386C43.234 123.591 50.3803 123.047 57.0736 120.803C63.7668 118.559 69.7967 114.685 74.6202 109.531V80.4506H63.3902Z"
                  fill="#0070BA"/>
            <path d="M79.6602 37.9004H95.8902V43.1804H88.1702V80.4404H79.6602V37.9004Z" fill="#0070BA"/>
            <path d="M105.07 64.4604L106.53 43.1804H107L108.46 64.4604H105.07ZM95.6602 80.4604H104L104.79 69.1504H108.79L109.58 80.4604H117.91L113.46 37.9004H100.09L95.6602 80.4604Z"
                  fill="#0070BA"/>
            <path d="M129.08 65.5502V73.5502C129.068 73.7313 129.093 73.9131 129.155 74.0839C129.216 74.2548 129.312 74.411 129.437 74.5426C129.563 74.6743 129.714 74.7785 129.881 74.8486C130.049 74.9188 130.229 74.9534 130.41 74.9502C130.591 74.9476 130.769 74.9092 130.934 74.8372C131.099 74.7651 131.249 74.661 131.373 74.5307C131.498 74.4004 131.596 74.2466 131.66 74.0783C131.725 73.9099 131.756 73.7304 131.75 73.5502V63.6702C131.75 62.3302 131.51 60.8702 128.35 60.8702H124.89V56.1902H128.47C130.9 56.1902 131.75 55.6502 131.75 53.0302V44.5802C131.756 44.3999 131.725 44.2204 131.66 44.052C131.596 43.8837 131.498 43.7299 131.373 43.5996C131.249 43.4694 131.099 43.3652 130.934 43.2932C130.769 43.2211 130.591 43.1827 130.41 43.1802C130.229 43.177 130.049 43.2115 129.881 43.2817C129.714 43.3518 129.563 43.456 129.437 43.5877C129.312 43.7193 129.216 43.8755 129.155 44.0464C129.093 44.2172 129.068 44.399 129.08 44.5802V51.5102H120.57V45.5102C120.57 42.5102 120.94 37.9102 126.89 37.9102H133.89C139.89 37.9102 140.21 42.5302 140.21 45.5102V52.3202C140.21 56.9302 136.99 58.2102 134.44 58.0902V58.5102C140.15 58.3902 140.21 62.7702 140.21 64.2802V72.8502C140.21 75.8502 139.85 80.4502 133.89 80.4502H126.89C120.89 80.4502 120.57 75.8302 120.57 72.8502V65.5502H129.08Z"
                  fill="#0070BA"/>
            <path d="M144.73 37.9004H164.43V80.4404H155.92V43.1804H153.24V80.4404H144.73V37.9004Z" fill="#0070BA"/>
            <path d="M177.9 61.3004V43.1804H179C179.91 43.1804 180.58 43.9704 180.58 45.3004V59.1704C180.58 60.5104 179.91 61.3004 179 61.3004H177.9ZM169.4 80.4404H177.9V66.0004H182.76C188.76 66.0004 189.08 61.3804 189.08 58.4004V45.5004C189.08 42.5004 188.72 37.9004 182.76 37.9004H169.4V80.4404Z"
                  fill="#0070BA"/>
            <path d="M204.401 73.5604C204.405 73.7403 204.373 73.9193 204.308 74.087C204.243 74.2547 204.145 74.408 204.021 74.538C203.896 74.668 203.747 74.7722 203.583 74.8447C203.418 74.9172 203.241 74.9565 203.061 74.9604C202.879 74.9636 202.699 74.929 202.531 74.8589C202.364 74.7887 202.213 74.6845 202.088 74.5529C201.963 74.4212 201.866 74.265 201.805 74.0942C201.743 73.9233 201.718 73.7415 201.731 73.5604V44.5604C201.718 44.3792 201.743 44.1975 201.805 44.0266C201.866 43.8558 201.963 43.6996 202.088 43.5679C202.213 43.4363 202.364 43.3321 202.531 43.2619C202.699 43.1918 202.879 43.1572 203.061 43.1604C203.241 43.1643 203.418 43.2036 203.583 43.2761C203.747 43.3485 203.896 43.4528 204.021 43.5828C204.145 43.7128 204.243 43.866 204.308 44.0338C204.373 44.2015 204.405 44.3805 204.401 44.5604V73.5604ZM193.221 72.8404C193.221 75.8404 193.581 80.4404 199.541 80.4404H206.591C212.541 80.4404 212.911 75.8204 212.911 72.8404V45.5004C212.911 42.5004 212.541 37.9004 206.591 37.9004H199.541C193.541 37.9004 193.221 42.5204 193.221 45.5004V72.8404Z"
                  fill="#0070BA"/>
            <path d="M239.409 37.9004H250.469V80.4404H241.999V53.7604H241.699L237.319 80.4404H230.509L226.099 53.7604H225.789V80.4404H217.289V37.9004H228.349L233.879 67.8004L239.409 37.9004Z"
                  fill="#0070BA"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M79.6602 93.6406H250.45V122.971H79.6602V93.6406ZM109.529 113.68H106.759L106.769 99.4199H102.529V117H110.529V120.68H114.679V113.68H113.769V99.4199H109.529V113.68ZM170.779 99.4199V117H166.539V102.75H163.769V117H159.529V99.4199H170.779ZM227.521 111.7V110.06L223.281 110.03V112.35C223.281 113.68 222.621 114.17 221.741 114.17C220.861 114.17 220.291 113.63 220.291 112.3V103.53C220.293 103.347 220.333 103.166 220.408 102.999C220.484 102.832 220.593 102.683 220.73 102.561C220.866 102.438 221.026 102.346 221.2 102.289C221.374 102.232 221.559 102.212 221.741 102.23C221.933 102.219 222.125 102.246 222.306 102.31C222.487 102.373 222.654 102.472 222.797 102.6C222.94 102.729 223.057 102.884 223.14 103.057C223.223 103.23 223.271 103.418 223.281 103.61V105.2H227.521V104C227.521 101.25 225.811 99 221.791 99C217.771 99 216.051 101.23 216.051 104V111.67C216.051 115.72 217.871 117.43 221.791 117.43C225.711 117.43 227.521 115.7 227.521 111.7Z"
                  fill="#0070BA"/>
        </svg>
    </div>
</div>

<div class="app-inner">
    <header class="app-header">
        <div class="app-header__mobile-toolbar">
            <div class="app-header__mobile-trigger js-mobile-menu-trigger">
                <svg
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                            d="M3 4H21V6H3V4ZM3 11H21V13H3V11ZM3 18H21V20H3V18Z"
                            fill="#AAB4B9"
                    />
                </svg>
            </div>
            <div class="app-header__mobile-logo">
                <a href="<?= get_home_url(); ?>"
                ><img src="<?= get_template_directory_uri(); ?>/assets/logo/Logorus.svg" alt=""/></a>
            </div>
            <div class="app-header__mobile-search">
                <a href="<?php the_permalink(172); ?>">
                    <svg
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M15 14.4993L23 22.0911L22.0911 23L14.0912 15.4082L15 14.4993Z"
                                fill="var(--color-primary)"
                        />
                        <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M9.5 2.30769C5.5278 2.30769 2.30769 5.5278 2.30769 9.5C2.30769 13.4722 5.5278 16.6923 9.5 16.6923C13.4722 16.6923 16.6923 13.4722 16.6923 9.5C16.6923 5.5278 13.4722 2.30769 9.5 2.30769ZM1 9.5C1 4.80558 4.80558 1 9.5 1C14.1944 1 18 4.80558 18 9.5C18 14.1944 14.1944 18 9.5 18C4.80558 18 1 14.1944 1 9.5Z"
                                fill="var(--color-primary)"
                        />
                    </svg>
                </a>
            </div>
        </div>
        <div class="app-header__inner">
            <div class="app-header__sec">
                <div class="container">
                    <div class="app-header__sec-content">
                        <div class="app-header__options">
                            <!--                            <div class="app-header__lang">
                                                            <div class="site-lang">EN</div>
                                                        </div>-->
                            <div class="app-header__theme theme-switcher">
                                <div
                                        class="theme-switcher__item for-light-theme js-light-theme is-active"
                                        title="Перключиться на светлую тему"
                                >
                                    <div class="theme-switcher__icon"></div>
                                </div>
                                <div
                                        class="theme-switcher__item for-dark-theme js-dark-theme"
                                        title="Перключиться на темную тему"
                                >
                                    <div class="theme-switcher__icon"></div>
                                </div>
                            </div>
                        </div>
                        <?php if (carbon_get_theme_option( 'crb_footer_youtube' ) || carbon_get_theme_option( 'crb_footer_vk' )):?>
                        <div class="app-header__social">
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
                        <nav class="app-header__sec-nav">
                            <a href="<?php the_permalink(79); ?>" class="app-header__sec-nav-link">Закупки</a>
                            <a href="<?php the_permalink(77); ?>" class="app-header__sec-nav-link">Контакты</a>
                            <a href="<?php the_permalink(209); ?>" class="app-header__sec-nav-link">Ответы на
                                вопросы</a>
                            <a href="<?php the_permalink(172); ?>" class="app-header__sec-nav-link">Поиск</a>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="app-header__pri">
                <div class="container">
                    <div class="app-header__pri-content">
                        <div class="app-header__logo">
                            <a href="<?= get_home_url(); ?>"
                            ><img src="<?= get_template_directory_uri(); ?>/assets/logo/Logorus.svg" alt=""
                                /></a>
                        </div>
                        <nav class="app-header__pri-nav">
                            <?php

                            $menus = array_merge([
                                'theme_location' => 'head_menu',
                                'container' => false,
                                'menu_class' => 'nav-menu',
                                'echo' => false,
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 3,
                                'walker' => new True_Walker_Nav_Menu()
                            ]);

                            echo wp_nav_menu($menus);
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>