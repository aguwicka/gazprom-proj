<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_theme_support('menus');

register_nav_menus(
    array(
        'head_menu' => 'Шапка сайта'
    )
);


class True_Walker_Nav_Menu extends Walker_Nav_Menu {
    /*
     * Позволяет перезаписать <ul class="sub-menu">
     */
    function start_lvl(&$output, $depth = 0, $args = NULL) {
        // для WordPress 5.3+
        // function start_lvl( &$output, $depth = 0, $args = NULL ) {
        /*
         * $depth – уровень вложенности, например 2,3 и т д
         */
        $output .= '<ul class="nav-menu__sub-menu">';
    }
    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        // для WordPress 5.3+
        // function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        global $wp_query;
        /*
         * Некоторые из параметров объекта $item
         * ID - ID самого элемента меню, а не объекта на который он ссылается
         * menu_item_parent - ID родительского элемента меню
         * classes - массив классов элемента меню
         * post_date - дата добавления
         * post_modified - дата последнего изменения
         * post_author - ID пользователя, добавившего этот элемент меню
         * title - заголовок элемента меню
         * url - ссылка
         * attr_title - HTML-атрибут title ссылки
         * xfn - атрибут rel
         * target - атрибут target
         * current - равен 1, если является текущим элементом
         * current_item_ancestor - равен 1, если текущим (открытым на сайте) является вложенный элемент данного
         * current_item_parent - равен 1, если текущим (открытым на сайте) является родительский элемент данного
         * menu_order - порядок в меню
         * object_id - ID объекта меню
         * type - тип объекта меню (таксономия, пост, произвольно)
         * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
         * type_label - название данного типа с локализацией (Рубрика, Страница)
         * post_parent - ID родительского поста / категории
         * post_title - заголовок, который был у поста, когда он был добавлен в меню
         * post_name - ярлык, который был у поста при его добавлении в меню
         */
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /*
         * Генерируем строку с CSS-классами элемента меню
         */
        $class_names = $value = '';
        $classes = empty( $data_object->classes ) ? array() : (array) $data_object->classes;
        $classes[] = 'menu-item-' . $data_object->ID;


        // функция join превращает массив в строку
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $data_object, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        /*
         * Генерируем ID элемента
         */
        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $data_object->ID, $data_object, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';


        /*
         * Генерируем элемент меню
         */
        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = ! empty( $data_object->attr_title ) ? ' title="'  . esc_attr( $data_object->attr_title ) .'"' : '';
        $attributes .= ! empty( $data_object->target )     ? ' target="' . esc_attr( $data_object->target     ) .'"' : '';
        $attributes .= ! empty( $data_object->xfn )        ? ' rel="'    . esc_attr( $data_object->xfn        ) .'"' : '';
        $attributes .= ! empty( $data_object->url )        ? ' class="app-header__pri-nav-link" href="'   . esc_attr
            ( $data_object->url        )
                                                             .'"'
            : '';

        // ссылка и околоссылочный текст
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $data_object->title, $data_object->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $data_object, $depth, $args );
    }
}

function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes['nav-menu__sub-menu-name'] = 'nav-menu__sub-menu-name';
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );