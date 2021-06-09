const gulp = require('gulp')
const sass = require('gulp-sass')
const concat = require('gulp-concat')
const cssnano = require('gulp-cssnano')
const autoprefixer = require('gulp-autoprefixer')
const {argv} = require('yargs')
const config = require('../gulp.config.json')
const nop = require('gulp-nop')
const cssbeautify = require('gulp-cssbeautify')
const sourcemaps = require('gulp-sourcemaps')
const rename = require('gulp-rename')

let directory = argv.output
let dev = argv.dev || false
if (directory === undefined) {
    directory = config.output
}

function cssUnminify(styles){
    let paths = []
    styles.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })

    return gulp.src(paths)
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: ["./node_modules"],
            outputStyle: "compressed"
        }).on('error', sass.logError))
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest(`./${directory}/assets/css/`))
}

function styleTask(styles) {
    let paths = []
    styles.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })

    return gulp.src(paths)
        .pipe(sass({
            includePaths: ["./node_modules"],
            outputStyle: "compressed"
        }).on('error', sass.logError))
        .pipe(gulp.dest(`./${directory}/assets/css/`))
    
}

gulp.task('style:backend', function () {
    let styles = ['./src/assets/scss/**/*.scss'];
    if (dev) {
        return cssUnminify(styles, 'backend.css')
    } else { 
        return styleTask(styles, 'backend.min.css')
    }
})

gulp.task('style:backend-plugin', function(){
    let styles = config.backend.assets.style;
    let paths = []
    styles.forEach((js) => {
        paths.push(js.replace('{directory}', directory))
    })

    return gulp.src(paths)
        .pipe(sass({
            includePaths: ["./node_modules"],
            outputStyle: "compressed"
        }).on('error', sass.logError))
        .pipe(concat('backend-plugin.min.css'))
        .pipe(gulp.dest(`./${directory}/assets/css/`))
})

gulp.task('style:intro', function(){
    let styles = config.intro.assets.style;
    return gulp.src(styles)
        .pipe(sass({
            includePaths: ["./node_modules"],
            outputStyle: "compressed"
        }).on('error', sass.logError))
        .pipe(cssnano())
        .pipe(concat('intro.min.css'))
        .pipe(gulp.dest(`./${directory}/assets/css/`))
})

gulp.task('style', gulp.series('style:backend-plugin','style:backend', 'style:intro'));