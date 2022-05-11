<?php
/**
 * Template Name: Направления одиночная страница
 * Template Post Type: page
 */

get_header();?>

<main class="app-main">
    <article class="layout-default">
        <div
            class="app-section as-banner"
            style="--app-section-bg: url('https://picsum.photos/1600/351')"
        >
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h1">
                            Концептуальный инжиниринг и комплексная экспертиза
                        </h1>
                        <div class="app-section__pretitle typo--secondary">
                            Компания / Направления
                        </div>
                        <p class="app-section__description typo--body1">
                            Концептуальный инжиниринг – это интегрированный подход к
                            разработке концепции на ранних этапах проекта
                        </p>
                    </header>
                </div>
            </div>
        </div>

        <!-- О проекте -->
        <section class="app-section is-dark">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">О направлении</h1>
                        <p class="app-section__description">
                            Газпром ЦПС осознает задачи компании через баланс между
                            постепенным снятием неопределенностей, рисками, сроками
                            реализации и качеством проработки. Проработка на раннем
                            этапе - возможность с открытыми глазами определить рамки,
                            цели, задачи и условия, на которых проект дальше будет
                            реализовываться. Здесь очень важно проектное мышление для
                            того, чтобы объединить команду специалистов в единое
                            понимание концепции разработки. Мы считаем, что
                            использование практики концептуального инжиниринга является
                            лучшей практикой в отрасли и рады иметь возможность
                            развивать такое кросс-функциональное взаимодействие, иногда
                            и между компаниями. Стирая границы и барьеры между ними,
                            объединяя людей в кросс-функциональные команды для
                            выполнения такой большой и серьезной задачи. Комплексной
                            экспертизе проектов инструмент, который помогает инвестору
                            принять правильное решение о начале инвестирования в проект
                            или о степени завершенности задач текущего этапа и
                            готовности к переходу на следующий этап проекта.
                        </p>
                    </header>
                </div>
            </div>
        </section>

        <!-- Задачи -->
        <section class="app-section has-image">
            <div class="container">
                <div class="app-section__image">
                    <img src="https://picsum.photos/600/399" alt="" />
                </div>
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">
                            Оказываемые услуги
                        </h1>
                    </header>
                    <ul class="list">
                        <li>
                            Сопровождение инвестиционных проектов в области геологии,
                            разработки, бурения
                        </li>
                        <li>Концептуальный и стоимостной инжиниринг</li>
                        <li>Оценка новых и перспективных проектов</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Проекты -->
        <section class="app-section">
            <div class="container">
                <div class="app-section__content">
                    <header class="app-section__header">
                        <h1 class="app-section__title typo--h2">Проекты</h1>
                    </header>
                    <div class="parts has-small-cards">
                        <div class="parts__items">
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/311" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title">Реализованные</a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/312" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title">Базовые</a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/313" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title">Проекты развития</a>
                            </div>
                            <div class="part-card">
                                <div class="part-card__image">
                                    <img src="https://picsum.photos/600/319" alt="" />
                                </div>
                                <div class="part-card__overlay"></div>
                                <a href="#" class="part-card__title"
                                >Перспективные проекты
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php  get_footer();?>
