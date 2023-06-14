const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ])
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    })
    .webpackConfig({
        resolve: {
            alias: {
                'jquery': path.join(__dirname, 'node_modules/jquery/src/jquery')
            }
        }
    });
