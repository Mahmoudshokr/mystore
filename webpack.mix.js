let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/assets/js/app.js','resources/assets/js/libs/bootstrap.js',
    'resources/assets/js/libs/bootstrap.min.js',
    'resources/assets/js/libs/jquery.js',
    'resources/assets/js/libs/scripts.js','resources/assets/js/libs/sb-admin-2.js',
    'resources/assets/js/libs/metisMenu.js'], 'public/js/libs.js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .styles(['resources/assets/css/libs/blog-post.css','resources/assets/css/libs/bootstrap.css',
        'resources/assets/css/libs/bootstrap.min.css',
        'resources/assets/css/libs/font-awesome.css','resources/assets/css/libs/metisMenu.css',
        'resources/assets/css/libs/sb-admin-2.css'
        ,'resources/assets/css/libs/styles.css'],'./public/css/libs.css')
    .js(['resources/assets/js/app.js','resources/assets/js/jsb4/bootstrap.js',
        'resources/assets/js/jsb4/bootstrap.min.js',
        'resources/assets/js/jsb4/jquery.js',
        'resources/assets/js/jsb4/bootstrap.bundle.js',
        'resources/assets/js/jsb4/bootstrap.bundle.min.js'], 'public/js/jsb4.js')
    .styles(['resources/assets/css/cssb4/bootstrap.css',
        'resources/assets/css/cssb4/bootstrap.min.css',
        'resources/assets/css/cssb4/font-awesome.css','resources/assets/css/cssb4/bootstrap-grid.css',
        'resources/assets/css/cssb4/bootstrap-grid.min.css',
        'resources/assets/css/cssb4/bootstrap-reboot.css',
        'resources/assets/css/cssb4/bootstrap-reboot.min.css'],'./public/css/cssb4.css');