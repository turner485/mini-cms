// ---  Require Plugins ---  //

var gulp = require('gulp'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    compass = require('gulp-compass');

// --- Compass Task --- //

gulp.task('compass', function() {
    gulp.src('scss/core.scss')
        .pipe(plumber())
        .pipe(compass({
            config_file: './config.rb',
            css: 'css',
            sass: 'scss',
            images: 'images'
        }))
        .pipe(rename('admin_styles.css'))
        .pipe(gulp.dest('css/'));

});


// --- Bower Task --- //

// --- Watch Task  --- //

gulp.task('watch', function() {
   gulp.watch('scss/**/*.scss', ['compass']);
});

// --- Default Task --- //

gulp.task('default', ['compass', 'watch']);
