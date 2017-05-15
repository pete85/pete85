var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	compass = require('gulp-compass'),
	plumber = require('gulp-plumber'),
	autoprefixer = require('gulp-autoprefixer'),
	php  = require('gulp-connect-php'),
	browserSync = require('browser-sync').create(),
	reload = browserSync.reload,
	del = require('del'),
	rename = require('gulp-rename');

// *********************************************************************
// SCRIPTS TASKS
// *********************************************************************

gulp.task('scripts', function(){
	gulp.src(['js/scripts.js', '!js/**/*.min.js'])
	.pipe(plumber())
	.pipe(rename({suffix:'.min'}))
	.pipe(uglify())
	.pipe(gulp.dest('js'))
	.pipe(reload({stream:true}));
});


// *********************************************************************
// Compass TASKS
// *********************************************************************

gulp.task('compass', function(){
	gulp.src('sass/styles.scss')
	.pipe(plumber())
	.pipe(compass({
		config_file: './config.rb',
		css: 'css',
		sass: 'sass'
	}))
	.pipe(autoprefixer('last 2 versions'))
	.pipe(gulp.dest('css/'))
	.pipe(reload({stream:true}));
});


// *********************************************************************
// HTML TASKS
// *********************************************************************

gulp.task('html', function(){
	gulp.src('*.html')
	.pipe(reload({stream:true}));
});


// *********************************************************************
// PHP TASKS
// *********************************************************************

gulp.task('php', function() {
    php.server({ base: './', port: 8070, keepalive: true});
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
	return gulp.src('**/*/')
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

gulp.task('browser-sync',['php'], function() {
    browserSync.init({
        proxy: '127.0.0.1:8070',
        port: 8080,
        open: true,
        notify: false
    });
});


// *********************************************************************
// WATCH TASKS
// *********************************************************************

gulp.task('watch', function(){
	gulp.watch("js/*.js", ['scripts']).on('change', browserSync.reload);
	gulp.watch("sass/*.scss", ['compass']).on('change', browserSync.reload);
	gulp.watch('*.html', ['html']).on('change', browserSync.reload);
	gulp.watch('*.php', ['php']).on('change', browserSync.reload);
	gulp.watch('include/*.php', ['php']).on('change', browserSync.reload);
	gulp.watch('admin/*.php', ['php']).on('change', browserSync.reload);
});


// *********************************************************************
// DEFAULT TASK
// *********************************************************************

gulp.task('default', ['scripts', 'compass', 'html', 'php', 'browser-sync', 'watch']);