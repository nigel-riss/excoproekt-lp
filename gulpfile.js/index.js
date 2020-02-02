'use strict';

const autoprefixer = require('gulp-autoprefixer');
const embedSVG = require('gulp-embed-svg');
const gulp = require('gulp');
const pug = require('gulp-pug');
const sass = require('gulp-sass');
const server = require('browser-sync').create();
const webpack = require('webpack-stream');


// Paths
const dirs = {
  pugMain: './src/pug/*.pug',
  pugAll: './src/pug/**/*.pug',
  svg: './src/img/**/*.svg',
  scssMain: './src/scss/style.scss',
  scssAll: './src/scss/**/*.scss',
  js: './src/js/**/*.js',
  docs: './docs',
  php: './src/php/*.php',
  wp: 'G:/xampp2/htdocs/excoproekt/wp-content/themes/exco',
};


// Webpack config
const webpackConfig = {
  entry: {
    scripts: './src/js/scripts.js',
  },
  output: {
    filename: '[name].js',
  },
  mode: 'production',
  // mode: 'development',
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
};


/**
 * Starts Browsersync server
 */
const startServer = () => {
  server.init({
    server: {
      baseDir: dirs.docs,
    },
    port: 1337,
  });
};


/**
 * Reloads Browsersync server
 * @param {function} cb callback
 */
const reloadServer = (cb) => {
  server.reload();

  cb();
};


/**
 * Render html from pug
 * @param {function} cb callback
 */
const renderPug = (cb) => {
  gulp.src(dirs.pugMain)
    .pipe(pug())
    .on('error', (error) => {
      console.log("\x1b[31m", error.message, "\x1b[0m");
    })
    .pipe(embedSVG({
      root: './src/',
    }))
    .on('error', (error) => {
      console.log("\x1b[31m", error.message, "\x1b[0m");
    })
    .pipe(gulp.dest(dirs.docs));

    cb();
};


/**
 * Compile scss files to styles.css
 * And move to ./docs
 * @param {function} cb callback
 */
const compileStyles = (cb) => {
  gulp.src(dirs.scssMain)
    .pipe(sass())
    .on('error', (error) => {
      console.log("\x1b[31m", error.message, "\x1b[0m");
    })
    .pipe(autoprefixer({
      overrideBrowserslist: [
        "last 2 versions",
        "> 0.5%",
        "maintained node versions",
        "not dead"
      ]
      // cascade: false,
    }))
    .pipe(gulp.dest(dirs.docs))
    .pipe(server.reload({stream: true}))
    .pipe(gulp.dest(dirs.wp));

  cb();
};


/**
 * Compiles js code
 * @param {function} cb callback
 */
const compileScripts = (cb) => {
  gulp.src(dirs.js)
    .pipe(webpack(webpackConfig))
    .on('error', (error) => {
      console.log("\x1b[31m", error.message, "\x1b[0m");
    })
    .pipe(gulp.dest(dirs.docs))
    .pipe(gulp.dest(dirs.wp));

  cb();
};


/**
 * Copies PHP files to wp-themes directory
 * @param {function} cb callback
 */
const copyPHP = (cb) => {
  gulp.src(dirs.php)
    .pipe(gulp.dest(dirs.wp));

  cb();
}


/**
 * Watches files for changes
 */
const watch = () => {
  startServer();
  gulp.watch(dirs.pugAll, gulp.series(renderPug, reloadServer));
  gulp.watch(dirs.svg, gulp.series(renderPug, reloadServer));
  gulp.watch(dirs.scssAll, gulp.series(compileStyles));
  gulp.watch(dirs.js, gulp.series(compileScripts, reloadServer));
  gulp.watch(dirs.php, gulp.series(copyPHP));
};


// Single tasks
exports.renderPug = renderPug;
exports.compileStyles = compileStyles;
exports.compileScripts = compileScripts;
exports.startServer = startServer;
exports.copyPHP = copyPHP;

// Watch task
exports.watch = watch;
