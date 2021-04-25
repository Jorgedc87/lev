const { series, src, dest, watch } = require('gulp');
const sass = require('gulp-sass');

// Complicar SASS

function css( ) {
    return src('src/scss/app.scss')
        .pipe( sass({
            outputStyle: 'expanded'
        }) )
        .pipe( dest('./build/css') )
}

function minify( ) {
    return src('src/scss/app.scss')
        .pipe( sass({
            outputStyle: 'compressed'
        }) )
        .pipe( dest('./build/css') )
}

function watchFiles() {
    watch('src/scss/**/*.scss', css);
}

exports.css = css;
exports.minify = minify;
exports.watchFiles = watchFiles;