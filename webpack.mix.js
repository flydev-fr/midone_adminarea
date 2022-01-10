const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

const path = require('path'); //add this

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

mix.alias({
    "@": path.join(__dirname, "resources/app"),
    "~": path.join(__dirname, "node_modules"),
});

mix
    .js('resources/js/app.js', 'public/js').vue()
    // .js("resources/app/main.js", "public/dist/js")
    // .vue()
    .sass("resources/app/assets/sass/app.scss", "public/dist/css")
    .options({
        processCssUrls: false,
        postCss: [tailwindcss("./tailwind.config.js")],
    })
    .autoload({
        "cash-dom": ["cash"],
        "@popperjs/core": ["Popper"],
    })
    .browserSync({
        proxy: "midone-vue-laravel.test",
        files: ["resources/**/*.*"],
    });
