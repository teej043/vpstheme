'use strict';

var gulp = require('gulp'),
	sass = require('gulp-sass');

gulp.task('sass', function () {
	gulp.src('./veepeeyes/sass/**/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('./veepeeyes/'));
});

gulp.task('sass:watch', function () {
	gulp.watch('./veepeeyes/sass/**/*.scss', ['sass']);
});
