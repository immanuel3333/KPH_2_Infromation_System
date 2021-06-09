const gulp = require('gulp')
const terser = require('terser');
const gulpTerser = require('gulp-terser');
const wait = require('gulp-wait')
const concat = require('gulp-concat')
const config = require('../gulp.config.json')
const {argv} = require('yargs')
const nop = require('gulp-nop')
let directory = argv.output
if (directory === undefined) {
    directory = config.output
}

gulp.task('js-move', function () {
    let paths = []
    paths.push('./src/assets/js/**/*.js');
    return gulp.src(paths)
        .pipe(gulp.dest(`./${directory}/assets/js`));
});

function jsTask(scripts, filename) {
    let paths = []
    scripts.required.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })
    if (scripts.optional !== undefined) {
        scripts.optional.forEach((js) => {
            paths.push(js.replace('{directory}', directory))
        })
    }
    return gulp.src(paths)
            .pipe(wait(500))
            .pipe(concat(filename))
            .pipe(gulpTerser({}, terser.minify))
            .pipe(gulp.dest(`./${directory}/assets/js`));
}

function jsUnminify(){
    let paths = []
    scripts.required.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })
    if (scripts.optional !== undefined) {
        scripts.optional.forEach((js) => {
            paths.push(js.replace('{directory}', directory))
        })
    }
    return gulp.src(paths)
            .pipe(wait(500))
            .pipe(concat(filename))
            .pipe(gulp.dest(`./${directory}/assets/js`));
}

gulp.task('js-mini:backend', function() {
    const scripts = config.backend.assets.js
    return jsTask(scripts, 'backend-bundle.min.js')
})

gulp.task('js-mini:intro', function() {
    const scripts = config.intro.assets.js
    return jsTask(scripts, 'intro-bundle.min.js')
})

gulp.task('js', gulp.series('js-move','js-mini:backend', 'js-mini:intro'))