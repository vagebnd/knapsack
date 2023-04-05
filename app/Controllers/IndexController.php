<?php

namespace App\Controllers;

use Knapsack\Compass\Routing\Controller;
use Knapsack\Compass\Support\Facades\Config;

class IndexController extends Controller
{
    public function adminRun()
    {
        // This hook will be called when you are on the admin edit page.
        // This is a good place to register your metaboxes.
    }

    public function index()
    {
        return vgb_view('index', [
            'editorUrl' => $this->getEditorUrl(),
        ]);
    }

    private function getEditorUrl()
    {
        return Config::get('app.editor') . '://file/' . trim(vgb_path('resources/views/index.blade.php'), '/');
    }
}
