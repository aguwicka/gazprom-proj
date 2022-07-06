<?php
/**
 * Template Name: Совет Директоров
 * Template Post Type: page
 */

get_header();?>

<main class="app-main">
    <article class="layout-default">
        <div
                class="app-section as-banner"
                style="--app-section-bg: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1"><?php the_title();?></h1>
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

        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <div class="company-parts">
                        <?php
                        $directors = carbon_get_the_post_meta('crb_directors' );

                        foreach ($directors as $director):
                        ?>
                        <div class="pie-part" style="--value: <?= $director['crb_percent']?>">
                            <div class="pie-part__chart"></div>
                            <div class="pie-part__content">
                                <div class="pie-part__value"><?= $director['crb_percent']?></div>
                                <div class="pie-part__label typo--secondary"><?= $director['crb_title']?></div>
                                <div class="pie-part__image">
                                    <img
                                            src="<?= $director['crb_img']?>"
                                            alt=""
                                    />
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="app-section">
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
        </section> -->
    </article>
</main>


<?php get_footer();?>
