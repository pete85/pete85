var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	compass = require('gulp-compass'),
	plumber = require('gulp-plumber'),
	autoprefixer = require('gulp-autoprefixer'),
	browserSync = require('browser-sync').create(),
	reload = browserSync.reload,
	del = require('del'),
	rename = require('gulp-rename');

// *********************************************************************
// SCRIPTS TASKS
// *********************************************************************

gulp.task('scripts', function(){
	gulp.src(['first_project/js/scripts.js', '!first_project/js/**/*.min.js'])
	.pipe(plumber())
	.pipe(rename({suffix:'.min'}))
	.pipe(uglify())
	.pipe(gulp.dest('first_project/js'))
	.pipe(reload({stream:true}));
});


// *********************************************************************
// Compass TASKS
// *********************************************************************

gulp.task('compass', function(){
	gulp.src('first_project/sass/styles.scss')
	.pipe(plumber())
	.pipe(compass({
		config_file: './config.rb',
		css: 'first_project/css',
		sass: 'first_project/sass'
	}))
	.pipe(autoprefixer('last 2 versions'))
	.pipe(gulp.dest('first_project/css/'))
	.pipe(reload({stream:true}));
});


// *********************************************************************
// HTML TASKS
// *********************************************************************

gulp.task('html', function(){
	gulp.src('first_project/*.html')
	.pipe(reload({stream:true}));
});


// *********************************************************************
// BUILD TASKS
// *********************************************************************

// clear files and folders from build folder
gulp.task('build:cleanfolder', function(cb) {
	del([
		'build/**'
		], cb);
});


// create build directory
gulp.task('build:copy', function() {
	return gulp.src('first_project/**/*/')
	.pipe(gulp.dest('build/'));
});


// remove unwanted files and directories
gulp.task('build:remove', ['build:copy'], function(cb) {
	del([
		'build/sass/',
		'build/bower_components/',
		'build/node_modules/',
		'build/config.rb',
		'build/ftpsync.settings',
		'build/package.json',
		'build/bower.json',

		], cb);
});


gulp.task('build', ['build:copy', 'build:remove']);


// *********************************************************************
// BrowserSync TASKS
// *********************************************************************

gulp.task('browser-sync', function () {
   var files = [
      '*.html',
      'css/*.css',
      'js/*.js',
      'sass/**/*.scss'
   ];

   browserSync.init(files, {
      server: {
         baseDir: './first_project/'
      }
   });
});

gulp.task('build:serve', function () {
   var files = [
      '*.html',
      'css/**/*.css',
      'js/**/*.js',
      'sass/**/*.scss'
   ];

   browserSync.init(files, {
      server: {
         baseDir: './build/'
      }
   });
});


// *********************************************************************
// IMAGES COMPRESSION TASKS
// *********************************************************************

// gulp.task('images', function() { 
// 	    gulp.src('first_project/img/*')
//         .pipe(imagemin())
//         .pipe(gulp.dest('first_project/dist/img'));
// });


// *********************************************************************
// WATCH TASKS
// *********************************************************************

gulp.task('watch', function(){
	gulp.watch("first_project/js/*.js", ['scripts']).on('change', browserSync.reload);
	gulp.watch("first_project/sass/*.scss", ['compass']).on('change', browserSync.reload);
	gulp.watch('first_project/*.html', ['html']).on('change', browserSync.reload);
});


// *********************************************************************
// DEFAULT TASK
// *********************************************************************

gulp.task('default', ['scripts', 'compass', 'html', 'browser-sync', 'watch']);