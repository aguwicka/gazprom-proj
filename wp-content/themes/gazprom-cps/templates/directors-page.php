<?php
/**
 * Template Name: Совет Директоров
 * Template Post Type: page
 */

get_header();?>

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
                <a href="index.html"
                ><img src="assets/logo/logo-blue.svg" alt=""
                    /></a>
            </div>
            <div class="app-header__mobile-search">
                <a href="#searchPage">
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
                            <div class="app-header__lang">
                                <div class="site-lang">EN</div>
                            </div>
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
                        <div class="app-header__social">
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
                        <nav class="app-header__sec-nav">
                            <a href="#" class="app-header__sec-nav-link">Закупки</a>
                            <a href="#" class="app-header__sec-nav-link">Контакты</a>
                            <a href="#" class="app-header__sec-nav-link">Поиск</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="app-header__pri">
                <div class="container">
                    <div class="app-header__pri-content">
                        <div class="app-header__logo">
                            <a href="index.html"
                            ><img src="assets/logo/logo-blue.svg" alt=""
                                /></a>
                        </div>
                        <nav class="app-header__pri-nav">
                            <ul class="nav-menu">
                                <li class="nav-menu__sub-menu-name">
                      <span class="app-header__pri-nav-link">
                        <span>Компания</span>
                        <svg
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                          <g clip-path="url(#clip0_3062_75472)">
                            <path
                                d="M7.91622 3.54297L4.99955 6.45964L2.08289 3.54297"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                          </g>
                          <defs>
                            <clipPath id="clip0_3062_75472">
                              <rect
                                  width="10"
                                  height="10"
                                  fill="white"
                                  transform="translate(10) rotate(90)"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                                    <ul class="nav-menu__sub-menu">
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >О компании
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Миссия и ценности</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link">
                                                Совет директоров
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Руководство</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Направления</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-menu__sub-menu-name">
                      <span class="app-header__pri-nav-link"
                      ><span>Проекты </span
                          ><svg
                              width="10"
                              height="10"
                              viewBox="0 0 10 10"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                          >
                          <g clip-path="url(#clip0_3062_75472)">
                            <path
                                d="M7.91622 3.54297L4.99955 6.45964L2.08289 3.54297"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                          </g>
                          <defs>
                            <clipPath id="clip0_3062_75472">
                              <rect
                                  width="10"
                                  height="10"
                                  fill="white"
                                  transform="translate(10) rotate(90)"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                                    <ul class="nav-menu__sub-menu">
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Реализованные проекты
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Проекты развития</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-menu__sub-menu-name">
                      <span class="app-header__pri-nav-link">
                        <span>Сотрудничество</span>
                        <svg
                            width="10"
                            height="10"
                            viewBox="0 0 10 10"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                          <g clip-path="url(#clip0_3062_75472)">
                            <path
                                d="M7.91622 3.54297L4.99955 6.45964L2.08289 3.54297"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                          </g>
                          <defs>
                            <clipPath id="clip0_3062_75472">
                              <rect
                                  width="10"
                                  height="10"
                                  fill="white"
                                  transform="translate(10) rotate(90)"
                              />
                            </clipPath>
                          </defs>
                        </svg>
                      </span>
                                    <ul class="nav-menu__sub-menu">
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Сотрудничество</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Партнеры</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#" class="app-header__pri-nav-link"
                                            >Клиенты</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="app-header__pri-nav-link">Услуги</a>
                                </li>
                                <li>
                                    <a href="#" class="app-header__pri-nav-link">Карьера</a>
                                </li>
                                <li>
                                    <a href="#" class="app-header__pri-nav-link">Новости</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="app-main">
        <article class="layout-default">
            <div
                class="app-section as-banner"
                style="--app-section-bg: url('https://picsum.photos/1600/351')"
            >
                <div class="container">
                    <div class="app-section__content">
                        <header class="app-section__header">
                            <h1 class="app-section__title typo--h1">Совет директоров</h1>
                            <div class="app-section__pretitle typo--secondary">
                                Компания
                            </div>
                            <p class="app-section__description typo--body1">
                                Положение Совета директоров в системе органов управления ООО
                                «Газпром ЦПС» и его деятельность, регулируются внутренними
                                документами.
                            </p>
                        </header>
                    </div>
                </div>
            </div>

            <section class="app-section">
                <div class="container">
                    <div class="app-section__content">
                        <div class="company-parts">
                            <div class="company-parts__item">
                                <div class="company-parts__value">49,9%</div>
                                <div class="company-parts__name typo--secondary">
                                    Газпром вниигаз
                                </div>
                                <div class="company-parts__logo">
                                    <img
                                        src="https://vniigaz.gazprom.ru/d/settingsgeneral/01/1/011_1-2-1_1_rgb-3.jpg"
                                        alt=""
                                    />
                                </div>
                                <div class="company-parts__value-decor">
                                    <svg
                                        width="299"
                                        height="304"
                                        viewBox="0 0 299 304"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <circle
                                            cx="142"
                                            cy="147"
                                            r="136"
                                            stroke="#F5F7FA"
                                            stroke-width="12"
                                        />
                                        <g filter="url(#filter0_d_2963_19431)">
                                            <path
                                                d="M142.49 284C217.882 284 279 224.006 279 150C279 75.9938 217.882 16 142.49 16"
                                                stroke="url(#paint0_linear_2963_19431)"
                                                stroke-width="12"
                                                stroke-linecap="round"
                                            />
                                        </g>
                                        <defs>
                                            <filter
                                                id="filter0_d_2963_19431"
                                                x="126.49"
                                                y="0"
                                                width="172.51"
                                                height="304"
                                                filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB"
                                            >
                                                <feFlood
                                                    flood-opacity="0"
                                                    result="BackgroundImageFix"
                                                />
                                                <feColorMatrix
                                                    in="SourceAlpha"
                                                    type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                    result="hardAlpha"
                                                />
                                                <feOffset dx="2" dy="2" />
                                                <feGaussianBlur stdDeviation="6" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix
                                                    type="matrix"
                                                    values="0 0 0 0 0.272263 0 0 0 0 0.709083 0 0 0 0 0.97527 0 0 0 0.5 0"
                                                />
                                                <feBlend
                                                    mode="normal"
                                                    in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_2963_19431"
                                                />
                                                <feBlend
                                                    mode="normal"
                                                    in="SourceGraphic"
                                                    in2="effect1_dropShadow_2963_19431"
                                                    result="shape"
                                                />
                                            </filter>
                                            <linearGradient
                                                id="paint0_linear_2963_19431"
                                                x1="165.428"
                                                y1="-88.2222"
                                                x2="272.11"
                                                y2="311.409"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#1643B8" />
                                                <stop offset="1" stop-color="#17A7FE" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="company-parts__item">
                                <div class="company-parts__value">25,05%</div>
                                <div class="company-parts__name typo--secondary">
                                    ГПН-ЗС
                                </div>
                                <div class="company-parts__logo">
                                    <img
                                        src="https://www.gpnbonus.ru/bitrix/_images/blueFixed/logo.png"
                                        alt=""
                                    />
                                </div>
                                <div class="company-parts__value-decor">
                                    <svg
                                        width="299"
                                        height="297"
                                        viewBox="0 0 299 297"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <circle
                                            cx="141.999"
                                            cy="155"
                                            r="136"
                                            stroke="#F5F7FA"
                                            stroke-width="12"
                                        />
                                        <g filter="url(#filter0_d_2963_19431)">
                                            <path
                                                d="M140.999 16C217.214 16 278.999 78.1959 278.999 154.918C278.999 166.91 277.49 178.548 274.651 189.648"
                                                stroke="url(#paint0_linear_2963_19431)"
                                                stroke-width="12"
                                                stroke-linecap="round"
                                            />
                                        </g>
                                        <defs>
                                            <filter
                                                id="filter0_d_2963_19431"
                                                x="124.999"
                                                y="0"
                                                width="174"
                                                height="209.649"
                                                filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB"
                                            >
                                                <feFlood
                                                    flood-opacity="0"
                                                    result="BackgroundImageFix"
                                                />
                                                <feColorMatrix
                                                    in="SourceAlpha"
                                                    type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                    result="hardAlpha"
                                                />
                                                <feOffset dx="2" dy="2" />
                                                <feGaussianBlur stdDeviation="6" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix
                                                    type="matrix"
                                                    values="0 0 0 0 0.272263 0 0 0 0 0.709083 0 0 0 0 0.97527 0 0 0 0.5 0"
                                                />
                                                <feBlend
                                                    mode="normal"
                                                    in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_2963_19431"
                                                />
                                                <feBlend
                                                    mode="normal"
                                                    in="SourceGraphic"
                                                    in2="effect1_dropShadow_2963_19431"
                                                    result="shape"
                                                />
                                            </filter>
                                            <linearGradient
                                                id="paint0_linear_2963_19431"
                                                x1="164.188"
                                                y1="-51.5298"
                                                x2="210.299"
                                                y2="217.97"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#1643B8" />
                                                <stop offset="1" stop-color="#17A7FE" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="company-parts__item">
                                <div class="company-parts__value">25,05%</div>
                                <div class="company-parts__name typo--secondary">
                                    ЭТП ГПБ
                                </div>
                                <div class="company-parts__logo">
                                    <img
                                        src="https://etpgpb.ru/assets/redesign/pages/home/blocks/partners/17_SmartOffice-775c5f758cbb1458a7d21a6ac33a4a93aab5458c71f14cfdcb7c6877a457f35d.png"
                                        alt=""
                                    />
                                </div>
                                <div class="company-parts__value-decor">
                                    <svg
                                        width="299"
                                        height="297"
                                        viewBox="0 0 299 297"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <circle
                                            cx="141.999"
                                            cy="155"
                                            r="136"
                                            stroke="#F5F7FA"
                                            stroke-width="12"
                                        />
                                        <g filter="url(#filter0_d_2963_19431)">
                                            <path
                                                d="M140.999 16C217.214 16 278.999 78.1959 278.999 154.918C278.999 166.91 277.49 178.548 274.651 189.648"
                                                stroke="url(#paint0_linear_2963_19431)"
                                                stroke-width="12"
                                                stroke-linecap="round"
                                            />
                                        </g>
                                        <defs>
                                            <filter
                                                id="filter0_d_2963_19431"
                                                x="124.999"
                                                y="0"
                                                width="174"
                                                height="209.649"
                                                filterUnits="userSpaceOnUse"
                                                color-interpolation-filters="sRGB"
                                            >
                                                <feFlood
                                                    flood-opacity="0"
                                                    result="BackgroundImageFix"
                                                />
                                                <feColorMatrix
                                                    in="SourceAlpha"
                                                    type="matrix"
                                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                    result="hardAlpha"
                                                />
                                                <feOffset dx="2" dy="2" />
                                                <feGaussianBlur stdDeviation="6" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix
                                                    type="matrix"
                                                    values="0 0 0 0 0.272263 0 0 0 0 0.709083 0 0 0 0 0.97527 0 0 0 0.5 0"
                                                />
                                                <feBlend
                                                    mode="normal"
                                                    in2="BackgroundImageFix"
                                                    result="effect1_dropShadow_2963_19431"
                                                />
                                                <feBlend
                                                    mode="normal"
                                                    in="SourceGraphic"
                                                    in2="effect1_dropShadow_2963_19431"
                                                    result="shape"
                                                />
                                            </filter>
                                            <linearGradient
                                                id="paint0_linear_2963_19431"
                                                x1="164.188"
                                                y1="-51.5298"
                                                x2="210.299"
                                                y2="217.97"
                                                gradientUnits="userSpaceOnUse"
                                            >
                                                <stop stop-color="#1643B8" />
                                                <stop offset="1" stop-color="#17A7FE" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <footer class="app-footer">
        <div class="container">
            <div class="app-footer__content">
                <nav class="app-footer__nav">
                    <div class="app-footer__col">
                        <div class="app-footer__group">
                            <a href="#" class="app-footer__link">Компания</a>
                            <a href="#" class="app-footer__link">О компании </a>
                            <a href="#" class="app-footer__link">Совет директоров </a>
                            <a href="#" class="app-footer__link">Руководство</a>
                            <a href="#" class="app-footer__link">Направления</a>
                            <a href="#" class="app-footer__link">Контакты</a>
                        </div>

                        <div class="app-footer__group">
                            <a href="#" class="app-footer__link">Проекты</a>
                            <a href="#" class="app-footer__link">Наши проекты</a>
                            <a href="#" class="app-footer__link"
                            >Реализованные проекты
                            </a>
                            <a href="#" class="app-footer__link">Базовые проекты </a>
                            <a href="#" class="app-footer__link">Проекты развития</a>
                            <a href="#" class="app-footer__link"
                            >Перспективные проекты
                            </a>
                        </div>
                    </div>

                    <div class="app-footer__col">
                        <div class="app-footer__group">
                            <a href="#" class="app-footer__link">Сотрудничество</a>
                            <a href="#" class="app-footer__link">Сотрудничество</a>
                            <a href="#" class="app-footer__link">Партнеры</a>
                            <a href="#" class="app-footer__link">Клиенты</a>
                            <a href="#" class="app-footer__link">Закупки</a>
                        </div>

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

<?php get_footer();?>
