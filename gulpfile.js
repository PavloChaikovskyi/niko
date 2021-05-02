const gulp = require('gulp');
// minify JS
const uglify = require('gulp-uglify');
// convert scss to css
const sass = require('gulp-sass')
// rename extention
const rename = require('gulp-rename');
// delite files
const del = require('del');
// add sourcemaps to min.css
const sourcemaps = require('gulp-sourcemaps');
// concat all scripts to main.js
const concat = require('gulp-concat');
// browserSync 
const browserSync = require('browser-sync').create();

const scssWatcher = gulp.watch(['assets/src/scss/']);
const phpWatcher = gulp.watch(['./*.php'])
const scriptsWatcher = gulp.watch(['assets/src/js/custom/*.js'])


function styles() {
    del(['assets/dist/css'])
    return gulp.src(['assets/src/scss/main.scss'])
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed', }).on('error', sass.logError))
        .pipe(concat('main.css'))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('assets/dist/css'))
        .pipe(browserSync.stream());
}

// gather together js libraries in one file
function get_js_libr() {
    return gulp.src(['node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/popper.min.js', 'node_modules/bootstrap/dist/js/bootstrap.min.js'])
        //create separates files 
        .pipe(gulp.dest("assets/src/js/libr"))
        .pipe(concat('libr.min.js'))
        //create one file
        .pipe(gulp.dest("assets/dist/libr/js/"))
}

// gather together css libraries in one file
function get_css_libr() {
    return gulp.src(['assets/src/bootstrap/bootstrap.scss'])
        .pipe(sass({ outputStyle: 'compressed', }).on('error', sass.logError))
        // .pipe(concat('libr.min.css'))
        .pipe(gulp.dest("assets/dist/libr/css/"))
}


function clean() {
    return del(['assets/dist/',])
}

function watch() {
    browserSync.init({ proxy: 'http://nikolink.local/web', online: true })
    scssWatcher.on('change', styles)
    phpWatcher.on('change', browserSync.reload)
    scriptsWatcher.on('change', browserSync.reload)
}


exports.default = gulp.series(styles, watch)
exports.get_js_libr = get_js_libr
exports.get_css_libr = get_css_libr