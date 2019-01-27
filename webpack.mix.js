const mix = require('laravel-mix');
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

const sassOptions = {
    precision: 5
};

/* ==============================================================
 CORE STYLESHEETS -->
============================================================== */

const resourceFolder = `resources/assets/vendor/wrappixel/material-pro/4.1.0`;

if (true) {
    mix
    //Template
        .sass(`${resourceFolder}/material/scss/style.scss`,       'public/css/material/style.css', sassOptions)

        //Color Palettes
        .sass(`${resourceFolder}/material/scss/colors/blue.scss`,           'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/blue-dark.scss`,      'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/default.scss`,        'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/default-dark.scss`,   'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/green.scss`,          'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/green-dark.scss`,     'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/megna.scss`,          'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/megna-dark.scss`,     'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/purple.scss`,         'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/purple-dark.scss`,    'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/red.scss`,            'public/css/colors', sassOptions)
        .sass(`${resourceFolder}/material/scss/colors/red-dark.scss`,       'public/css/colors', sassOptions)
    ;
}


/* ==============================================================
END CORE STYLESHEETS -->
============================================================== */

/* ==============================================================
 APPLICATION FILES -->
============================================================== */

mix
    .js('resources/assets/js/home-one.js','public/js')
    .js('resources/assets/js/home-two.js','public/js')
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
;

/* ==============================================================
 END APPLICATION FILES -->
============================================================== */

mix.version

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