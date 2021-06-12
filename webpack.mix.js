const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
const path = require('path');

mix.setPublicPath(path.resolve('./'));
mix.postCss('./resources/css/style.css', './css/app.css',
    tailwindcss('./tailwind.config.js')
);
mix.options({
    postCss: [
        require('postcss-nested-ancestors'),
        require('postcss-nested'),
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]
});
mix.version();