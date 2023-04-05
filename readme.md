# Vagebond Knapsack
This is a WordPress starter kit and can be used to kickstart your theme development.

## 1: Installation
composer create-project vagebond/knapsack your-theme-name (not yet implemented)

## 2: Adding templates
Knapsack uses the Knapsack router to map templates to views.
Open up the `routes/templates.php` file and add your routes.

```php
$router->template('my template name', function () {
    echo 'Hello world!'
});
```

You can also add a template with a view.

```php
$router->template('my template name', function () {
    echo vgb_view('my-view');
});
```

But the most common way is to use a controller.

```php
$router->template('my template name', [MyController::class, 'myMethod']);
```


## Configuration
Knapsack works out of the box, but you can configure it to your needs.
By default, the theme looks for a `app.ts` files in the `resources/assets/ts/app.ts` location.
You can change this in the `bootstrap/theme/assets.php` file. (will be moved to config file)

The `bootstrap/theme/settings.php` contains the defaults for your Theme, like `theme_support` and other settings.

## Blade

## Vite

## Development

## Testing
[not yet implemented]
