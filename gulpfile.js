var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var autoprefix = require('gulp-autoprefixer');
var csso = require('gulp-csso');

sass.compiler = require('node-sass');

var browserSync = require('browser-sync');
var reload = browserSync.reload;

gulp.task('styles', function () {
  return gulp.src('./assets/sass/style.scss')
    .pipe(sass.sync())
    .pipe(autoprefix())
    .pipe(csso())
    .pipe(gulp.dest('./'))
});

gulp.task('js', function () {
  return gulp.src(['./node_modules/bootstrap/dist/js/bootstrap.min.js', './assets/js/app.js', './assets/js/animate.js'])
    .pipe(concat('app.min.js'))
    // .pipe(uglify())
    .pipe(gulp.dest('./assets/js'));
});

gulp.task('serve', gulp.series('styles','js', function () {

  browserSync.init({
    proxy: 'localhost/wordpress/across-seconds/',
  });

  gulp.watch('./assets/sass/**/*.scss', gulp.series('styles')).on('change', reload);
  gulp.watch("./**/*.php").on('change', reload);
}));


