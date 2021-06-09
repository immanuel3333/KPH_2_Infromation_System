const gulp = require('gulp')
const config = require('../gulp.config.json')
const imagemin = require('gulp-imagemin')
const cache = require('gulp-cache')
const {argv} = require('yargs')
const { layouts } = require('../JsonData/Pages');
const gulpIf = require('gulp-if');

const prox = argv.prox
gulp.task('image', function () {
    let directory = argv.output
    let imgDir = 'images'
    if (prox !== undefined && prox) {
        imgDir = 'client-images'
    }
    let path = [`./src/assets/${imgDir}/**/*.*`]
    if (directory === undefined) {
        directory = config.output
    }
    if (prox !== undefined && prox) {
        path.push(`!./src/assets/${imgDir}/intro/**/**.*`)
        for (let l in layouts) {
            if (layouts[l].value !== config.backend.layout) {
                path.push(`!./src/assets/${imgDir}/layouts/${layouts[l].value}/**/**.*`)
            }
        }
        for (let b in config.pages.skip.backend) {
            path.push(`!src/assets/${imgDir}/${config.pages.skip.app[b]}*/**/**.*`);
        }
        for (let a in config.pages.skip.app) {
            path.push(`!src/assets/${imgDir}/${config.pages.skip.app[a]}*/**/**.*`);
        }

    }
    return gulp.src(path)
    .pipe(gulpIf(config.imgMinify, cache(imagemin())))
    .pipe(gulp.dest(`./${directory}/assets/images`));
});