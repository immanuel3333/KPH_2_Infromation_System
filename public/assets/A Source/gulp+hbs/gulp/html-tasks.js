const gulp = require('gulp')
const config = require('../gulp.config.json')
const handlebars = require('handlebars')
const gulpHandlebars = require('gulp-compile-handlebars')
const hbsLayouts = require('handlebars-layouts')
const rename = require('gulp-rename')
const {argv} = require('yargs')
const del = require('del')
const nop = require('gulp-nop')
const Sidebar = require('../JsonData/sidebar.json')
const { layouts, app, backend, frontend, innerpages} = require('../JsonData/Pages');
var package = require('../package.json');
hbsLayouts.register(handlebars)

const layout = config.backend.layout
let directory = argv.output
let dev = argv.dev
if (directory === undefined) {
    directory = config.output
}

gulp.task('hbs', function () {
	const options = {
		ignorePartials: true,
        batch: ['./src/templates/']
    }

    const paths = [
        'src/templates/pages/**/*.hbs',
    ]

    const skipApp = []

    for (let app in config.pages.skip.app) {
        skipApp[app] = `!src/templates/pages/app/${config.pages.skip.app[app]}*.hbs`
        for (let index in Sidebar) {
            if (Sidebar[index].name == 'app') {
                const rm = Sidebar[index].children.findIndex(item => item.name === config.pages.skip.app[app])
                if (rm > -1) {
                    Sidebar[index].children.splice(rm,1)
                }
            }
        }
    }

    const skipBackend = []

    for (let index in Sidebar) {
        if (Sidebar[index].children !== undefined) {
            if (Sidebar[index].children.length > 0) {
                for (let backend in config.pages.skip.backend) {
                    const rm = Sidebar[index].children.findIndex(item => item.name === config.pages.skip.backend[backend])
                    if (rm > -1) {
                        Sidebar[index].children.splice(rm,1)
                    }
                }
            }
        }
    }

    for (let backend in config.pages.skip.backend) {
        skipBackend[backend] = `!src/templates/pages/backend/${config.pages.skip.backend[backend]}*.hbs`
        const rm = Sidebar.findIndex(item => item.name === config.pages.skip.backend[backend])
        if (rm > -1) {
            Sidebar.splice(rm,1)
        }
    }
    
    let extra = []
    for (let side in Sidebar) {
        if (Sidebar[side].children !== undefined) {
            if (Sidebar[side].children.length === 0){
                extra.push(Sidebar[side].name)
            }
        }
    }
    for (let ex in extra) {
        const rm = Sidebar.findIndex(item => item.name === extra[ex])
        if (rm > -1) {
            Sidebar.splice(rm,1)
        }
    }

    return gulp.src(paths.concat(skipBackend, skipApp))
        .pipe(gulpHandlebars({
            layout: `layouts/backend/${config.backend.layout}`,
            dev: dev,
            version: package.version,
            defaultMenu: config.backend.layoutMenu,
            appName: config.appName,
            sidebarList: Sidebar,
            introLayouts: layouts,
            introApp: app,
            introFrontend: frontend,
            introPages: backend,
            introinner: innerpages,
            dark: config.dark,
            logoName: config.logoName,
            loaderName: config.loaderName,
            faviconName: config.faviconName
        }, options))
        .pipe(rename({
            extname: '.html'
        }))
        .pipe(gulp.dest(`./${directory}`));
})

gulp.task('html-hbs', gulp.series('hbs'));