<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

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
        Field::make('image', 'projects_img', 'Изображение велущего проекта')
            ->set_value_type('url'),
        Field::make( 'text', 'projects_name', 'Имя ведущего проекта' ),
        Field::make( 'text', 'projects_info', 'Должность ведущего проекта' ),
    ))
    ->add_tab(__('Блок 2'), array(
        Field::make('image', 'projects_pre_img', 'Превью проекта')
            ->set_value_type('url'),
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
}