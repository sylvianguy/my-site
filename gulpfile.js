var gulp   = require('gulp'),
		stylus = require('gulp-stylus'),
		autoprefixer = require('gulp-autoprefixer'),
		concat = require('gulp-concat'),
		browserSync = require('browser-sync'),
    	reload      = browserSync.reload;

gulp.task('default', ['styles', 'watch']);

gulp.task('styles', function() {
	return gulp.src('styl/**/*.styl')
		.pipe(stylus({
			'sourcemap=none': true,
			errLogToConsole: true
		}))
		.pipe(concat('style.css'))
		.pipe(gulp.dest('.'))
		.pipe(reload({stream: true}));
});

gulp.task('browser-sync', function() {
  browserSync({
    server: { baseDir: "./" }
  });
});

// configure which files to watch and what tasks to use on file changes
gulp.task('watch', function() {
	gulp.watch('styl/**/*.styl', ['styles']);
	gulp.watch('*.html', reload);
});