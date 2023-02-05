let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'js')
   .react();
mix.browserSync('localhost:8000');