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
	gulp.src(['19315_renault_trucks/js/scripts.js', '!19315_renault_trucks/js/**/*.min.js'])
	.pipe(plumber())
	.pipe(rename({suffix:'.min'}))
	.pipe(uglify())
	.pipe(gulp.dest('19315_renault_trucks/js'))
	.pipe(reload({stream:true}));
});


// *********************************************************************
// Compass TASKS
// *********************************************************************

gulp.task('compass', function(){
	gulp.src('19315_renault_trucks/sass/styles.scss')
	.pipe(plumber())
	.pipe(compass({
		config_file: './config.rb',
		css: '19315_renault_trucks/css',
		sass: '19315_renault_trucks/sass'
	}))
	.pipe(autoprefixer('last 2 versions'))
	.pipe(gulp.dest('19315_renault_trucks/css/'))
	.pipe(reload({stream:true}));
});


// *********************************************************************
// HTML TASKS
// *********************************************************************

gulp.task('html', function(){
	gulp.src('19315_renault_trucks/*.html')
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
	return gulp.src('19315_renault_trucks/**/*/')
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
         baseDir: './19315_renault_trucks/'
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
// 	    gulp.src('19315_renault_trucks/img/*')
//         .pipe(imagemin())
//         .pipe(gulp.dest('19315_renault_trucks/dist/img'));
// });


// *********************************************************************
// WATCH TASKS
// *********************************************************************

gulp.task('watch', function(){
	gulp.watch("19315_renault_trucks/js/*.js", ['scripts']).on('change', browserSync.reload);
	gulp.watch("19315_renault_trucks/sass/*.scss", ['compass']).on('change', browserSync.reload);
	gulp.watch('19315_renault_trucks/*.html', ['html']).on('change', browserSync.reload);
});


// *********************************************************************
// DEFAULT TASK
// *********************************************************************

gulp.task('default', ['scripts', 'compass', 'html', 'browser-sync', 'watch']);