<?php

use Illuminate\Support\Collection;
use Knapsack\Compass\Support\Vite;

/*
|--------------------------------------------------------------------------
| Ensure the default theme assets are loaded
|--------------------------------------------------------------------------
*/
add_action('wp_enqueue_scripts', function () {
    $vite = Vite::make();
    $vite->asset('app.ts');

    wp_enqueue_style('knapsack-style', get_template_directory_uri().'/style.css', [], wp_get_theme()->get('Version'));

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}, 100);

add_action('admin_enqueue_scripts', function ($hook) {
    $included = [
        'post.php',
        'post-new.php',
    ];

    if (Collection::make($included)->doesntContain($hook)) {
        return;
    }

    $vite = Vite::make();
    $vite->asset('admin.ts');
});
