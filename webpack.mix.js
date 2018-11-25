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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .js('resources/assets/js/voucher.js', 'public/js')
   .js(['node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
   		'resources/assets/js/datatables.js'], 'public/js/datatables.js')
   .js('node_modules/sweetalert2/dist/sweetalert2.all.min.js', 'public/js/sweetalert2.js')
   .styles('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css/datatables.css')
   .styles('node_modules/sweetalert2/dist/sweetalert2.min.css','public/css/sweetalert2.css')
   .js('resources/assets/js/jquery.printPage.js', 'public/js');
