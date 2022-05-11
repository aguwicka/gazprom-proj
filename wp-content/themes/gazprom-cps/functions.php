
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}


#enqueue style
require get_template_directory().'/inc/scripts.php';

#ID's in admin panel
require get_template_directory().'/inc/admin-id.php';

#carbon fields

require get_template_directory() . '/inc/carbon-fields.php';
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );