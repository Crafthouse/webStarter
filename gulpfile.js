var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglify');
var pump = require('pump');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var runSequence = require('run-sequence');
var autoprefixer = require('gulp-autoprefixer');

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('browserSync', function() {
    browserSync.init({
        proxy: 'http://webStarter:8888/',
        open: 'external'
    });
});


gulp.task('sass', function() {
    return gulp.src('app/scss/**/*.scss')
        .pipe(sass()) // Using gulp-sass
        .pipe(autoprefixer(autoprefixerOptions))
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({
            stream: true
        }));
});


gulp.task('watch', ['browserSync', 'sass'], function () {
    gulp.watch('app/scss/**/*.scss', ['sass']);
    gulp.watch('app/**/*.html', browserSync.reload);
    gulp.watch('app/**/*.php', browserSync.reload);
    gulp.watch('app/js/**/*.js', browserSync.reload);
    // Other watchers
});


gulp.task('minify-js', function (cb) {
    pump([
            gulp.src('app/js/**/*.js'),
            uglify(),
            gulp.dest('deploy/js/')
        ],
        cb
    );
});


gulp.task('minify-css', function() {
    return gulp.src('app/css/**/*.css')
        .pipe(cssnano())
        .pipe(gulp.dest('deploy/css/'));
});


gulp.task('images', function(){
    return gulp.src('app/img/**/*.+(png|jpg|gif|svg)')
        .pipe(imagemin({
            interlaced: true
        }))
        .pipe(gulp.dest('deploy/img'));
});


// Grab layout folder + files to deploy
gulp.task('layout', function() {
    return gulp.src('app/layout/**/*')
        .pipe(gulp.dest('deploy/layout'));
});


// Grab all root files + hidden to deploy
gulp.task('root-files', function() {
    gulp.src(['app/*', 'app/.*', '!app/scss'])
        .pipe(gulp.dest('deploy'));
});


// Deploy function
gulp.task('deploy', function (callback) {
    runSequence(['sass', 'minify-js', 'minify-css', 'images', 'root-files', 'layout'], callback);
});
