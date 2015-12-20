var gulp = require('gulp');
var rename = require('gulp-rename');
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 /**
  * Copy any required files
  */
gulp.task("copyfiles", function() {
    // jquery
    gulp.src('vendor/bower_components/jquery/dist/jquery.js')
        .pipe(gulp.dest('resources/assets/js/'));
    // bootstrap js
    gulp.src('vendor/bower_components/bootstrap/dist/js/bootstrap.js')
        .pipe(gulp.dest('resources/assets/js/'));
    // font-awesome fonts
    gulp.src('vendor/bower_components/font-awesome/fonts/**')
        .pipe(gulp.dest('public/fonts'));
});
elixir(function(mix) {
    mix.phpUnit();

    // mix scripts
    mix.scripts([
        'jquery.js',
        'bootstrap.js',
        'dropzone.js',
        'ie10-viewport-bug-workaround.js',
        'sweetalert.js'
        ],
        'public/js/vendor.js'
    );
    mix.scripts([
        'admin.js'
    ], 'public/js/admin.js');

    mix.sass('app.scss');
    mix.sass('admin.scss');
});