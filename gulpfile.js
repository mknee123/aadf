/**
Required Files
*/
var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    cleanCSS = require('gulp-clean-css');
    jshint = require('gulp-jshint');
    rename = require('gulp-rename');

/**Development Server **/
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('browser-sync', function() {
  browserSync.init({
    proxy: 'http://localhost',
  });
});
