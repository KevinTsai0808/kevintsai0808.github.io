const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.scripts('resources/js/slideshow.js', 'public/js/app.js');
 mix.styles(['resources/css/style.css','resources/css/menu.css', 'resources/css/contact.css' , 'resources/css/shopcart.css', 'resources/css/shoppingList.css'], 'public/css/app.css');
 mix.copyDirectory('resources/images', 'public/images');
