const mix = require('laravel-mix');

mix.sass('scss/style.scss', 'css/style.css').options({
    processCssUrls: false
 });