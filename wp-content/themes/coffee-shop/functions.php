<?php

function theme_scripts_and_styles(){
    // Load in bootstrap CSS
     wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css',
        [],
        null
    );

    // Load in local CSS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/}
     wp_enqueue_style(
        'idm250-styles', // name of the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/styles/main.css
        [], // dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css'), // version number
        'all' // media
    );

    //Load in bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js',
        [],
        true
    );
    // Load in local JS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_script/}
    wp_enqueue_script(
        'idm250-scripts', // name of the script
        get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
        [], // dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
        true // load in footer
    );

}

add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');
add_theme_support('post-thumbnails');

add_post_type_support('page', 'excerpt');


/**
 * Function to register custom post types
 * @link https://developer.wordpress.org/reference/functions/register_post_type/
 * @return void
 */

function register_custom_post_types()
{
    register_post_type(
        'coffees',
        [
            'labels' => [
                'name' => __('Coffees'),
                'singular_name' => __('Coffee')
            ],
            'public' => true,
            'has_archive' => true,
            'rewrite' => ['slug' => 'coffees'],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'show_in_rest' => true,
        ]
    );
}
add_action('init', 'register_custom_post_types');

/**
 * @link https://codex.wordpress.org/Navigation_Menus
 * @return void
 */
function register_theme_menus()
{
    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu'
    ]);
}
add_action('init', 'register_theme_menus');

function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}

function remove_archive_title_prefix($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}

/**
 * Register custom sidebars
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @return void
 */
function register_theme_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
    ]);
}
add_action('widgets_init', 'register_theme_sidebars');

/**
 * Save ACF fields to JSON in a directory in your theme
 * @return void
 */
function my_acf_json_save_point($path)
{
    $acf_directory = '/acf';
    $path = get_stylesheet_directory() . $acf_directory;
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_load_point($paths)
{
    // remove original path (optional)
    unset($paths[0]);

    // append path
    $acf_directory = '/acf';
    $paths[] = get_stylesheet_directory() . $acf_directory;

    // return
    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function add_acf_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Theme General Settings',
            'menu_title' => 'Theme Settings',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
        ]);
    }
}
add_action('init', 'add_acf_options_page');