<?php



define(
    'CUSTOM_POST_TYPES',
    get_stylesheet_directory() .
        '/includes/post-types/index.php'
);



// Require Dependencies
require __DIR__ . '/includes/vendors/index.php';


// Custom Post Types
include_once CUSTOM_POST_TYPES;





function enqueue_my_styles()
{
    // enqueue Google Fonts preconnect links
    // wp_enqueue_style('google-fonts-preconnect', 'https://fonts.googleapis.com');
    // wp_enqueue_style('google-fonts-gstatic', 'https://fonts.gstatic.com', array(), null, 'crossorigin');

    // enqueue Google Fonts styles
    wp_enqueue_style('eb-garamond-roboto', 'https://fonts.googleapis.com/css2?family=EB+Garamond:ital@0;1&family=Roboto&display=swap');

    // enqueue your custom CSS files
    wp_enqueue_style('bulma', get_stylesheet_directory_uri() . '/css/bulma.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css');
    wp_enqueue_style('covers', get_stylesheet_directory_uri() . '/css/covers.css');
    // wp_enqueue_style('course-covers', get_stylesheet_directory_uri() . '/css/course-covers.css');

    // enqueue the line icons CSS
    wp_enqueue_style('line-icons', 'https://unicons.iconscout.com/release/v3.0.3/css/line.css');

    // enqueue the favicon
    wp_enqueue_style('my-favicon', get_stylesheet_directory_uri() . '/img/logo-icon.png', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles');

function add_favicon()
{
    // Enqueue the favicon
    wp_enqueue_style('favicon', get_stylesheet_directory_uri() . '/img/logo-icon.png', array(), null, 'all');

    // Add the "rel='icon'" attribute to the favicon link
    $favicon = '<link rel="icon" href="' . get_stylesheet_directory_uri() . '/img/logo-icon.png" type="image/x-icon" />';
    echo $favicon;
}
add_action('wp_head', 'add_favicon');



function enqueue_my_scripts()
{
    // Enqueue script.js file
    wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/script.js', array(), null, false);
    wp_enqueue_script('google-tag-manager', 'https://www.googletagmanager.com/gtag/js?id=UA-204442258-1', array(), false, false);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');



function dmc_google_font_loader_tag_filter($html, $handle)
{
    if ($handle === 'google-fonts-preconnect') {
        $rel_preconnect = "rel='stylesheet preconnect'";

        return str_replace(
            "rel='stylesheet'",
            $rel_preconnect,
            $html
        );
    }
    return $html;
}
add_filter('style_loader_tag', 'dmc_google_font_loader_tag_filter', 10, 2);



function add_async_attribute($tag, $handle)
{
    $scripts_to_async = array('google-tag-manager');
    //check if this script is in the array	
    if (in_array($handle, $scripts_to_async)) {
        //return with async
        return str_replace(' src', ' async="async" src', $tag);
    } else {
        //return without async
        return $tag;
    }
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

// acf options page

// Options page

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();
}


add_filter('show_admin_bar', '__return_false');
