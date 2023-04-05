<?php

namespace App\Controllers;

use App\Metaboxes\CustomMetabox;
use Knapsack\Compass\Models\Post;
use Knapsack\Compass\Routing\Controller;

class IndexController extends Controller
{
    public function adminRun()
    {
        // This hook will be called when you are on the admin edit page.
        // This is a good place to register your metaboxes.
    }

    public function index()
    {
        $post = Post::find(get_the_ID());

        return vgb_view('index', [
            'post' => $post,
        ]);
    }
}
