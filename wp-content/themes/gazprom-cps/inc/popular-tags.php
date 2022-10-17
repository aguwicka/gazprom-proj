<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function wpb_tag_cloud() {
    $tags = get_tags();
    $args = array(
        'smallest'                  => 14,
        'largest'                   => 14,
        'unit'                      => 'px',
        'number'                    => 5,
        'format'                    => 'flat',
        'orderby'                   => 'count',
        'order'                     => 'ASC',
        'show_count'                => 0,
        'echo'                      => false
    );

    $tag_string = wp_generate_tag_cloud( $tags, $args );

    return $tag_string;

}
add_shortcode('wpb_popular_tags', 'wpb_tag_cloud');

add_filter ('widget_text', 'do_shortcode');


add_filter( 'wp_generate_tag_cloud_data', function( $tag_data )
{
    return array_map (
        function ( $item )
        {
            $item['class'] .= ' news-addons__group-item';
            return $item;
        },
        (array) $tag_data
    );

} );