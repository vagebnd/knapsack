<?php

namespace App\Metaboxes;

use Knapsack\Compass\Support\Metabox;

class CustomMetabox extends Metabox
{
    protected $metaKeys = [
        'subtitle',
        'title',
    ];

    public function render($post)
    {
        return vgb_view('metaboxes.custom', [
            'metaValues' => $this->getMetaValues($post),
        ]);
    }
}
