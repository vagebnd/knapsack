<?php

require_once __DIR__.'/assets.php';

/*
|--------------------------------------------------------------------------
| Set the content width
|--------------------------------------------------------------------------
*/
if (! isset($content_width)) {
    $content_width = 650;
}

/*
|--------------------------------------------------------------------------
| Define request protocol
|--------------------------------------------------------------------------
*/
if (! defined('REQUEST_PROTOCOL')) {
    if (is_ssl()) {
        define('REQUEST_PROTOCOL', 'https:');
    } else {
        define('REQUEST_PROTOCOL', 'http:');
    }
}

/*
|--------------------------------------------------------------------------
| Register theme support
|--------------------------------------------------------------------------
*/
add_action('after_setup_theme', function () {
    /*
    * Enable support for wordpress managed title tag
    *
    * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
    */
    add_theme_support('title-tag');

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
    */
    add_theme_support('post-thumbnails');

    /*
    * Enable support for feed links on posts and pages.
    *
    * @link https://developer.wordpress.org/reference/functions/add_theme_support/#feed-links
    */
    add_theme_support('automatic-feed-links');

    /*
    * Enable support for HTML5 elements.
    *
    * @link https://developer.wordpress.org/reference/functions/add_theme_support/#post-formats
    */
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script']);
});
