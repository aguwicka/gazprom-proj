<?php
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

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

#menu init
require get_template_directory().'/inc/menus-init.php';

#menu init
require get_template_directory().'/inc/widgets.php';

