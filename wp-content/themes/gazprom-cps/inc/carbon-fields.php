<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Block;
use Carbon_Fields\Field;
use Carbon_Fields\Widget;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
#cusmomers
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['templates/customers-page.php'])// only show our new fields on pages
    ->add_tab(__('Блок 1') , array(
        Field::make('text' , 'crb_subtitle'),
    ))
    ->add_tab(__('Блок 2'), array(
        Field::make( 'complex', 'crb_customers')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_image', 'Изображение' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_name', 'Название компании' ),
                Field::make( 'text', 'crb_content', 'Описание компании' ),
                Field::make( 'text', 'crb_link', 'Ссылка на сайт компании' ),
            ) ),
    ));


#about-company
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['templates/about-company.php'])// only show our new fields on pages
    ->add_tab(__('Блок 1'), array(
        Field::make('text', 'company_title' , 'Заголовок'),
        Field::make('rich_text', 'company_content', 'Описание'),
        Field::make( 'complex', 'crb_company')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_image', 'Иконка' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_title', 'Заголовок' ),
                Field::make( 'text', 'crb_subtext', 'Подтекст' ),
                Field::make( 'text', 'crb_content', 'Описание' ),
            ) ),
        Field::make('image', 'company_img', 'Изображение')
            ->set_value_type('url')
    ))
    ->add_tab(__('Блок 2'), array(
        Field::make('text' , 'task_title' , 'Заголовок'),
        Field::make('rich_text' , 'task_content' , 'Описание'),
        Field::make( 'complex', 'crb_tasks')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_list', 'Список задач' ),
            ) ),
    ))
    ->add_tab(__('Блок 3'), array(
        Field::make('text' , 'services_title', 'Заголовок'),
        Field::make('rich_text' , 'services_content' , 'Описание'),
        Field::make('image', 'services_img', 'Изображение')
            ->set_value_type('url'),
        Field::make( 'complex', 'crb_services')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'image', 'crb_image', 'Иконка' )
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_title', 'Заголовок' ),
                Field::make( 'text', 'crb_content', 'Описание' ),
            ) ),
    ));

#career page
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['templates/career-page.php'])
    ->add_tab(__('Блок 1'), array(
        Field::make('text', 'career_title' , 'Заголовок'),
        Field::make('rich_text', 'career_content' , 'Описание'),
        Field::make('text', 'career_blockquote' , 'Цитата в описании'),
        Field::make('text', 'career_link' , 'Ссылка в цитате'),
        Field::make('text', 'career_link_text' , 'Название ссылки в цитате'),
    ))
    ->add_tab(__('Блок 2'), array(
        Field::make('text', 'vacancies_title' , 'Заголовок'),
        Field::make( 'complex', 'crb_vacancies')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_title', 'Название вакансии' ),
                Field::make( 'text', 'crb_subtext', 'Город вакансии' ),
                Field::make( 'text', 'crb_link', 'Ссылка на вакансию' ),
            ) ),
    ))
    ->add_tab(__('Блок 3') , array(
        Field::make( 'text', 'sug_title', 'Заголовок' ),
        Field::make( 'complex', 'crb_sug')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_list', 'Список предложений' ),
            ) ),
        Field::make('image', 'sug_img', 'Изображение')
            ->set_value_type('url')
    ));

#directions single
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['templates/single-direction.php'])// only show our new fields on pages
    ->add_tab(__('Блок 1'), array(
        Field::make('text' , 'direction_title', 'Заголовок'),
        Field::make('rich_text' , 'direction_content', 'Описание'),
    ))
    ->add_tab(__('Блок 2'), array(
        Field::make('text' , 'direction_services_title', 'Заголовок'),
        Field::make( 'complex', 'crb_direction')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_list', 'Список услуг' ),
            ) ),
        Field::make('image', 'direction_img', 'Изображение')
            ->set_value_type('url'),
    ))
    ->add_tab(__('Хэштеги'), array(
        Field::make('text' , 'direction_tag', 'Категория'),
        Field::make('image', 'direction_main_img', 'Изображение превью')
            ->set_value_type('url'),
    ));

#mission page
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['templates/mission-page.php'])// only show our new fields on pages
    ->add_tab(__('Блок 1'), array(
        Field::make('text' , 'mission_title', 'Заголовок'),
        Field::make('rich_text' , 'mission_content', 'Описание'),
    ))
    ->add_tab(__('Блок 2'), array(
        Field::make('text' , 'values_title', 'Заголовок'),
        Field::make('rich_text' , 'values_content', 'Описание'),
        Field::make( 'complex', 'crb_values')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make('image', 'direction_img', 'Изображение')
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_title', 'Заголовок' ),
                Field::make( 'text', 'crb_content', 'Описание' ),
            ) ),
    ));

#partnership-page
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['templates/partnership-page.php'])
    ->add_tab(__('Блок 1'), array(
        Field::make( 'complex', 'crb_partnership')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make('image', 'partnership_img', 'Изображение')
                    ->set_value_type('url'),
                Field::make( 'text', 'crb_title', 'Заголовок' ),
                Field::make( 'text', 'crb_content', 'Описание' ),
            ) ),
    ));

#projects-single
Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', 'IN', ['templates/projects-single.php'])
    ->add_tab(__('Блок 1'), array(
        Field::make('text' , 'projects_title', 'Заголовок'),
        Field::make('rich_text' , 'projects_content', 'Описание'),
        Field::make('text', 'projects_blockquote' , 'Цитата в описании'),
        Field::make('image', 'projects_img', 'Изображение ведущего проекта')
            ->set_value_type('url'),
        Field::make( 'text', 'projects_name', 'Имя ведущего проекта' ),
        Field::make( 'text', 'projects_info', 'Должность ведущего проекта' ),
    ))
    ->add_tab(__('Блок 2'), array(
        Field::make( 'complex', 'crb_lightbox', 'Фотоотчёт')
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make('image', 'lightbox_image', 'Галерея')
                    ->set_value_type('url'),
            ) ),
        Field::make('image', 'projects_pre_img', 'Превью проекта')
            ->set_value_type('url'),
    ));
#directors-page
    Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' )
        ->where('post_template', 'IN', ['templates/directors-page.php'])
        ->add_tab(__('Блок 1'), array(
            Field::make( 'complex', 'crb_directors')
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make('image', 'crb_img', 'Изображение')
                        ->set_value_type('url'),
                    Field::make( 'text', 'crb_percent', 'Проценты' ),
                    Field::make( 'text', 'crb_title', 'Заголовок' ),
                ) ),
        ));

#leads-single
    Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' )
        ->where('post_template', 'IN', ['templates/leads-single-page.php'])
        ->add_tab(__('Блок 1'), array(
            Field::make('image', 'leads_pre_img', 'Фотография работника')
                ->set_value_type('url'),
            Field::make( 'text', 'leads_desc', 'Должность работника' ),
            Field::make( 'complex', 'crb_leads')
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make( 'text', 'crb_title', 'Заголовок' ),
                    Field::make( 'text', 'crb_content', 'Описание' ),
                ) ),
        ));

    #services-page
    Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' )
        ->where('post_template', 'IN', ['templates/services-page.php'])
        ->add_tab(__('Блок 1'), array(
            Field::make( 'text', 'services_name', 'Заголовок' ),
            Field::make( 'text', 'services_desc', 'Описание' ),
            Field::make( 'complex', 'crb_services')
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make('image', 'services_img', 'Иконка')
                        ->set_value_type('url'),
                    Field::make( 'text', 'crb_title', 'Заголовок' ),
                    Field::make( 'text', 'crb_content', 'Описание' ),
                ) ),
        ))
        ->add_tab(__('Блок 2'), array(
            Field::make( 'text', 'modal_name', 'Заголовок' ),
            Field::make( 'complex', 'crb_modules')
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make('image', 'direction_img', 'Изображение')
                        ->set_value_type('url'),
                    Field::make( 'text', 'crb_li', 'Список' ),
                ) ),
        ));

    #front-page
    Container::make( 'post_meta', __( 'Page Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' )
        ->where('post_template', 'IN', ['front-page.php'])
        ->add_tab(__('Блок 1'), array(
            Field::make( 'complex', 'crb_slider')
                ->set_layout( 'tabbed-horizontal' )
                ->add_fields( array(
                    Field::make('image', 'slide_img', 'Баннер')
                        ->set_value_type('url'),
                    Field::make( 'text', 'crb_title', 'Заголовок' ),
                    Field::make( 'text', 'crb_subtitle', 'Подописание' ),
                    Field::make( 'text', 'crb_content', 'Описание' ),
                    Field::make( 'complex', 'crb_slider_links')
                        ->set_layout( 'tabbed-horizontal' )
                        ->add_fields( array(
                            Field::make('text', 'crb_slider__title', 'Заголовок'),
                            Field::make('text', 'crb_slider__link', 'Ссылка на страницу')
                    ) ),
                ) ),
        ));


Container::make( 'theme_options', __( 'Глобальные настройки' ) )
    ->add_fields( array(
        Field::make( 'text', 'crb_tagline', __( 'Описание подвала сайта' ) ),
        Field::make( 'text', 'crb_email', __( 'Email сайта' ) ),
        Field::make( 'complex', 'crb_phones', 'Телефоны компании' )
            ->set_layout( 'tabbed-horizontal' )
            ->add_fields( array(
                Field::make( 'text', 'crb_phone', 'Номер телефона' ),
            ) )
    ) );
    class ThemeWidgetExample extends Widget {
        // Register widget function. Must have the same name as the class
        function __construct() {
            $this->setup( 'theme_widget_example', 'Theme Widget - Example', 'Displays a block with title/text', array(
                Field::make( 'complex', 'link_title', 'Меню и ссылка на него' )
                    ->set_layout( 'tabbed-horizontal' )
                    ->add_fields( array(
                        Field::make( 'text', 'crb_link_title', 'Название страницы' ),
                        Field::make( 'text', 'crb_link_link', 'ссылка' ),
                    ) )
            ) );
        }

        // Called when rendering the widget in the front-end
        function front_end( $args, $instance ) {
            $widgetLinks = carbon_get_the_post_meta('link_title');
            $footerlinks = $instance['link_title'];
            foreach ($footerlinks as $footerlink) {?>
                <a href="<?= $footerlink['crb_link_link'];?>" class="app-footer__link"><?= $footerlink['crb_link_title'];?></a>
            <?php }
        }
    }

}





function load_widgets() {
    register_widget( 'ThemeWidgetExample' );
}

add_action( 'widgets_init', 'load_widgets' );

