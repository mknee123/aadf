/**
Required Files
*/
require('es6-promise').polyfill();
var gulp = require('gulp');
    autoprefixer  = require('gulp-autoprefixer');

    uglify = require('gulp-uglify');
    concat = require('gulp-concat');
    jshint = require('gulp-jshint');


    plumber = require('gulp-plumber');
    gutil = require('gulp-util');
    cleanCSS = require('gulp-clean-css');

    imagemin = require('gulp-imagemin');

    rename = require('gulp-rename');

/**Development Server **/
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;


var onError = function( err ) {
  console.log('An error occurred:', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};


//CSS
gulp.task('css', function() {
  return gulp.src('./styles/**/*.css')
  .pipe(plumber({ errorHandler: onError }))
  .pipe(cleanCSS())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./'))

});

//JS
gulp.task('js', function() {
  return gulp.src(['./js/script.js'])
  .pipe(jshint())
  .pipe(jshint.reporter('default'))
  .pipe(concat('app.js'))
  .pipe(rename({suffix:'.min'}))
  .pipe(uglify())
  .pipe(gulp.dest('./js'))
});

//IMAGES
gulp.task('images', function() {
  return gulp.src('./images/src/*')
  .pipe(plumber({errorHandler: onError}))
  .pipe(imagemin({optimizationLevel: 7, progress: true}))
  .pipe(gulp.dest('./images/use'));
})


// WATCH
gulp.task('watch', function() {
  browserSync.init({
    files: ['./**/*.php'],
    proxy: 'http://localhost'
  });
  gulp.watch('./styles/**/*.css', ['css', reload ]);
  gulp.watch('./js/*.js', ['js', reload ]);
  gulp.watch('./images/src/*', ['images', reload ]);
  //gulp.watch('**/*').on('change', browserSync.reload);
});

// default task
//gulp.task('default', function(working) {
//  console.log('hello');
//  working();

//});


gulp.task('default', ['css', 'js', 'images', 'watch']);
