// include gulp
var gulp = require('gulp');

// include error handling plugins
var plumber = require('gulp-plumber');

// include css plugins
var sass 					= require('gulp-sass');
var cssnano 			= require('gulp-cssnano');
var sourcemap 		= require('gulp-sourcemaps');
var postcss 			= require('gulp-postcss');
var autoprefixer 	= require('autoprefixer');

// include js plugins
var webpack	= require('webpack-stream');

// paths for watching
var folders = {
	source: {
		scss: ['./source/scss/*.scss'],
		js:		['./source/js/**/*.js']
	},
	target: {
		css: 	'./public/css/',
		js:		'./public/js/'
	}
};

// CSS concat and minify
gulp.task('scss', function() {
	gulp.src(folders.source.scss)
		.pipe(plumber())
		.pipe(sourcemap.init())
		.pipe(sass())
		.pipe(postcss([autoprefixer({browsers: ['last 2 versions']})]))
		.pipe(cssnano())
		.pipe(sourcemap.write('.'))
		.pipe(gulp.dest(folders.target.css));
});

gulp.task('webpack', function() {
	return gulp.src('./source/js/a4.js')
		.pipe(plumber())
		.pipe(webpack(require('./webpack.config.js')))
		.pipe(gulp.dest(folders.target.js));
});

// Create icon font.
gulp.task('iconfont', function() {
	var iconfont 		= require('gulp-iconfont');
	var svgmin 			= require('gulp-svgmin');
	var consolidate = require('gulp-consolidate');

	return gulp.src(['./source/fonts/*.svg'])
		.pipe(plumber())
		.pipe(iconfont({
			fontName: 'Icons',
			prependUnicode: true,
			normalize: true,
			formats: ['ttf', 'eot', 'woff']
		}))
		.on('glyphs', function(codepoints, options) {
			gulp.src('./source/fonts/_icons.scss')
				.pipe(consolidate('lodash', {
					glyphs: codepoints,
					fontName: 'icons',
					fontPath: '../fonts/',
					className: 'icon'
				}))
				.pipe(gulp.dest('./source/scss/'))
		})
		.pipe(gulp.dest('./public/fonts/'));
});

// Rerun the task when a file changes
gulp.task('watch', function() {
	gulp.watch(folders.source.scss, ['scss']);
	gulp.watch(folders.source.js, ['webpack']);
});

// The default task (called when you run `gulp` from cli)
gulp.task('default', ['watch', 'scss', 'webpack']);