require('es6-promise').polyfill();
var gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    rtlcss        = require('gulp-rtlcss'),
    autoprefixer  = require('gulp-autoprefixer'),
    plumber       = require('gulp-plumber'),
    gutil         = require('gulp-util'),
    rename        = require('gulp-rename'),
    concat        = require('gulp-concat'),
    jshint        = require('gulp-jshint'),
    uglify        = require('gulp-uglify'),
    imagemin      = require('gulp-imagemin'),
    browserSync   = require('browser-sync').create(),
    inject        = require('gulp-inject'),
    wiredep       = require('wiredep').stream,
    reload        = browserSync.reload;

var onError = function( err ) {
  console.log('An error occurred:', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};

// Sass
gulp.task('sass', function() {

  var injectAppFiles = gulp.src('assets/sass/imports/*.scss', {read: false});
  var injectGlobalFiles = gulp.src('assets/sass/global/*.scss', {read: false});

  function transformFilepath(filepath) {
    return '@import "' + filepath + '";';
  }

  var injectAppOptions = {
    transform: transformFilepath,
    starttag: '// inject:app',
    endtag: '// endinject',
    addRootSlash: false
  }

  var injectGlobalOptions = {
    transform: transformFilepath,
    starttag: '// inject:global',
    endtag: '// endinject',
    addRootSlash: false
  };

  return gulp.src('./assets/sass/**/*.scss')
  .pipe(plumber({ errorHandler: onError }))
  .pipe(wiredep())
  .pipe(inject(injectGlobalFiles, injectGlobalOptions))
  .pipe(inject(injectAppFiles, injectAppOptions))
  .pipe(sass())
  .pipe(autoprefixer())
  .pipe(gulp.dest('./'))

  .pipe(rtlcss())                     // Convert to RTL
  .pipe(rename({ basename: 'rtl' }))  // Rename to rtl.css
  .pipe(gulp.dest('./'));             // Output RTL stylesheets (rtl.css)
});

// JavaScript
gulp.task('js', function() {
  return gulp.src(['./assets/js/*.js'])
  .pipe(jshint())
  .pipe(jshint.reporter('default'))
  .pipe(concat('script.js'))
  .pipe(rename({suffix: '.min'}))
  .pipe(uglify())
  .pipe(gulp.dest('./'));
});

// Images
gulp.task('images', function() {
  return gulp.src('./assets/images/src/*')
  .pipe(plumber({ errorHandler: onError }))
  .pipe(imagemin({ optimizationLevel: 7, progressive: true }))
  .pipe(gulp.dest('./assets/images/build'));
});

// Watch
gulp.task('watch', function() {
  browserSync.init({
    files: ['./**/*.php'],
    proxy: 'http://--nazwa-firmy--.test',
  });
  gulp.watch('./assets/sass/**/*.scss', ['sass', reload]);
  gulp.watch('./assets/js/*.js', ['js', reload]);
  gulp.watch('assets/images/src/*', ['images', reload]);
});

gulp.task('default', ['sass', 'js', 'images', 'watch']);