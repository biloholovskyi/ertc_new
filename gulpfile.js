const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const minCSS = require('gulp-clean-css');
const babel = require('gulp-babel');

gulp.task('default', function() {
    browserSync.init({
      proxy: "http://localhost:8888/ertc_new/app",
    });
    gulp.watch("app/wp-content/themes/erts/sass/**/*.scss", function () {
        return gulp.src("app/wp-content/themes/erts/sass/**/*.scss")
          .pipe(sass())
          .pipe(minCSS())
          .pipe(gulp.dest("app/wp-content/themes/erts/css"))
          .pipe(browserSync.stream());
    });
    gulp.watch("app/wp-content/themes/erts/js/**/*.js", function () {
      return gulp.src("app/wp-content/themes/erts/js/index.js")
        .pipe(babel({
          presets: ['@babel/env']
        }))
        .pipe(gulp.dest("app/wp-content/themes/erts/buildjs"))
        .pipe(browserSync.stream());
    });
    gulp.watch("app/**/*.php").on('change', browserSync.reload);
    gulp.watch("app/**/*.html").on('change', browserSync.reload);
    gulp.watch("app/wp-content/themes/erts/js/*.js").on('change', browserSync.reload);
});