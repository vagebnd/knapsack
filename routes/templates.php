<?php

use App\Controllers\IndexController;
use Knapsack\Compass\Support\Facades\Route;

Route::template('my first template', [IndexController::class, 'index']);
