<?php

use App\Controllers\IndexController;

/**
 * This is the main template file.
 *
 * To provide some more organisation, we've split the template logic into
 * 2 parts, we have the view and the controller.
 *
 * The controller can be found at this path: app/Controllers/IndexController.
 * The view can be found in the resources/views directory.
 */

vgb_run_controller(IndexController::class, 'index');
