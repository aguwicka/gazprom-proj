<?php
#enqueue style
require_once get_template_directory() . '/inc/scripts.php';

#ID's in admin panel
require_once get_template_directory() . '/inc/admin-id.php';

#custom breadcrumbs
require_once get_template_directory() . '/inc/breadcrumbs.php';

#popular tags
require_once get_template_directory() . '/inc/popular-tags.php';

#carbon fields

require_once get_template_directory() . '/inc/carbon-fields.php';
add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

/* Disable WordPress Admin Bar for all users */
add_filter('show_admin_bar', '__return_false');

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
// Disables the block editor from managing widgets.
add_filter('use_widgets_block_editor', '__return_false');

#menu init
require_once get_template_directory() . '/inc/menus-init.php';

#menu init
require_once get_template_directory() . '/inc/widgets.php';

function wp_corenavi()
{
    global $wp_query;
    $total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    $a['total'] = $total;
    $a['mid_size'] = 3; // сколько ссылок показывать слева и справа от текущей
    $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
    $a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
    $a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"

    if ($total > 1) echo '<nav class="pagination">';
    echo paginate_links($a);
    if ($total > 1) echo '</nav>';
}