var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
let babel = require('gulp-babel');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');
var rename = require("gulp-rename");

var browserSync = require('browser-sync');

// gulp.task('styles', function () {
//   return gulp.src('./assets/sass/style.scss')
//     .pipe(sass.sync())
//     .pipe(autoprefix())
//     .pipe(csso())
//     .pipe(gulp.dest('./'))
// });

// gulp.task('js', function () {
//   return gulp.src(['./node_modules/bootstrap/dist/js/bootstrap.min.js', './assets/js/app.js', './assets/js/animate.js'])
//     .pipe(concat('app.min.js'))
//     // .pipe(uglify())
//     .pipe(gulp.dest('./assets/js'));
// });

// gulp.task('serve', gulp.series('styles','js', function () {

//   browserSync.init({
//     proxy: 'localhost/wordpress/across-seconds/',
//   });

//   gulp.watch('./assets/sass/**/*.scss', gulp.series('styles')).on('change', reload);
//   gulp.watch("./**/*.php").on('change', reload);
// }));

// Compile SCSS
gulp.task('css:compile', function () {
  return gulp.src('./assets/sass/**/*.scss')
    .pipe(sass.sync({
      outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(gulp.dest('./'))
});

// Minify CSS
gulp.task('css:minify', gulp.series('css:compile', function () {
  return gulp.src([
    './*.css',
    '!./*.min.css'
  ])
    .pipe(cleanCSS())
    // .pipe(rename({
    //   suffix: '.min'
    // }))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream());
}));

// CSS
gulp.task('css', gulp.series('css:compile', 'css:minify'));

// Minify JavaScript
gulp.task('js:minify', function () {
  return gulp.src([
    './assets/js/*.js',
    '!./assets/js/*.min.js'
  ])
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./assets/js'))
    .pipe(browserSync.stream());
});

// JS
gulp.task('js', gulp.series('js:minify'));

// Default task
gulp.task('default', gulp.series('css', 'js'));

// Configure the browserSync task
gulp.task('browserSync', function () {
  browserSync.init({
    proxy: 'localhost/wordpress/across-seconds/',
  });
});

// Dev task
gulp.task('dev', gulp.series('css', 'js', function () {

  browserSync.init({
    proxy: 'localhost/wordpress/across-seconds/',
  });

  gulp.watch('./assets/sass/*.scss', gulp.series('css'));
  gulp.watch(['./assets/js/*.js','!./assets/js/*.min.js'], gulp.series('js'));
  gulp.watch('./*.php', browserSync.reload);
}));


