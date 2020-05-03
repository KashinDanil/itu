const _mix = require('laravel-mix');

_mix.js('resources/js/app.js', 'public/js')
    .autoload({
        jquery: ['$', 'window.jQuery']
    })
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/img', 'public/img');
