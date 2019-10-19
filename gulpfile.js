const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const webpack = require('webpack-stream');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');

const webConfig = {
  output: {
    filename: 'index.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        loader: 'babel-loader',
        exclude: '/node_modules/'
      },
      {
        test: /\.css$/i,
        use: ['style-loader', 'css-loader'],
      }
    ]
  }
};

gulp.task('default', function() {
  browserSync.init({
    proxy: "http://localhost:8888/myproject/app",
  });
  gulp.watch("wp-content/themes/ertc/sass/**/*.scss", function () {
    return gulp.src("wp-content/themes/ertc/sass/**/*.scss")
      .pipe(sass())
      .pipe(autoprefixer({
        browserslist: ['> 0.1%'],
        cascade: false
      }))
      .pipe(cleanCSS({
        level: 2
      }))
      .pipe(gulp.dest("wp-content/themes/ertc/css"))
      .pipe(browserSync.stream());
  });
  gulp.watch("wp-content/themes/ertc/js/**/*.js", function () {
    return gulp.src("wp-content/themes/ertc/js/index.js")
      .pipe(webpack(webConfig))
      .pipe(gulp.dest("wp-content/themes/ertc/buildjs"))
      .pipe(browserSync.stream());
  });
  gulp.watch("wp-content/themes/ertc/**/*.php").on('change', browserSync.reload);
  gulp.watch("wp-content/themes/ertc/**/*.html").on('change', browserSync.reload);
});