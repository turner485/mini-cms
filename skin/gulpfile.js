// ---  Require Plugins ---  //

var gulp = require('gulp'),
    bower = require('gulp-bower'),
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
        .pipe(rename('styles.css'))
        .pipe(gulp.dest('css/'));

});

// FontAwesome task
gulp.task('icons', function() {
    return gulp.src('./bower_components/font-awesome/fonts/**.*')
        .pipe(gulp.dest('./fonts'));
});

// --- Bower Task --- //

gulp.task('bower', function() {
    return bower()
        .pipe(gulp.dest('./bower_components'));
});

// --- Watch Task  --- //

gulp.task('watch', function() {
   gulp.watch('scss/**/*.scss', ['compass']);
});

// --- Default Task --- //

gulp.task('default', ['compass', 'watch', 'bower']);
