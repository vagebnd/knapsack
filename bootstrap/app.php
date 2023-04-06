<?php

use Knapsack\Compass\App;
use Knapsack\Compass\Contracts\KernelContract;
use Knapsack\Compass\Core\Http\Kernel;
use Knapsack\Compass\Support\PlatformCheck;

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
*/
require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Do the runtime check and validate the PHP and WordPress versions
|--------------------------------------------------------------------------
*/
(new PlatformCheck())->check();

/*
|--------------------------------------------------------------------------
| Create application instance
|--------------------------------------------------------------------------
*/
$app = App::getInstance();

$app->singleton(
    KernelContract::class,
    Kernel::class
);

$app->make(KernelContract::class);

/*
|--------------------------------------------------------------------------
| Load the theme default settings like: Theme support, content width, etc.
|--------------------------------------------------------------------------
*/
require_once __DIR__.'/theme/settings.php';

return $app;
