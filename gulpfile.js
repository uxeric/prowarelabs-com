// Uses Gulp version 4
const { src, dest, watch, series, parallel } = require('gulp'),
      replace = require('gulp-replace'), // Regex to cache bust CSS/JS (i.e. versioning)
      browser_sync = require('browser-sync').create() // Web Server

const sass = require('gulp-sass'), // Compiles SCSS to CSS
      postcss = require('gulp-postcss'), // Runs CSS functions (autoprefixer and cssnano)
      autoprefixer = require('autoprefixer'), // Adds vendor prefixes to CSS
      postcss_clean = require('postcss-clean'), // Minifies CSS
      sourcemaps = require('gulp-sourcemaps') // Creates source maps (map CSS to SASS)

const uglify = require('gulp-uglify'), // Minifies JS
      concat = require('gulp-concat') // Concatenates multiple files into one (JS)
      babel  = require('gulp-babel') // Convert ES6+ JS to ES2015

const handlebars = require('gulp-hb') // Compiles HBS Template Files

const image_resize = require('gulp-image-resize') // Optimize Images, requires: `sudo apt-get install graphicsmagick`

const path = {
  root: 'dist/',
  input: {
    favicons: [
      'src/favicons/favicon.ico',
      'src/favicons/favicon-16x16.png',
      'src/favicons/favicon-32x32.png',
    ],
    fonts: 'src/fonts/**/*.{icon,png}',
    // js: 'src/js/*.js',
    hbs_helpers: 'src/lib/helpers/*.js',
    html: 'src/views/**/!(_)*.html',
    images: 'src/images/**/*.{jpg,jpeg}',
    sass: 'src/sass/**/*.scss',
    videos: 'src/videos/**/*.{mp4,webm,jpg}',
  },
  output: {
    html: 'dist',
    css: 'dist/css',
    // js: 'dist/js',
    images: 'dist/images',
    favicons: 'dist',
  },
  partials: {
    molecules: 'src/views/molecules/**/*.hbs',
    headers: 'src/views/molecules/headers/**/*.hbs',
    includes: 'src/views/molecules/includes/**/*.hbs',
    layouts: 'src/views/molecules/layouts/**/*.hbs',
    ctas: 'src/views/molecules/ctas/**/*.hbs',
  },
}

function html_task () {
  let version = new Date().getTime()
  return src(path.input.html)
    .pipe(handlebars()
      .partials(path.partials.molecules)
      .partials(path.partials.headers)
      .partials(path.partials.includes)
      .partials(path.partials.layouts)
      .partials(path.partials.ctas)
      // .helpers(path.input.hbs_helpers)
      // .data('src/assets/data/**/*.{js,json}')
    )
    .pipe(replace(/version=\d*/g, `version=${version}`))
    .pipe(dest(path.output.html))
    .pipe(browser_sync.stream())
}

function sass_task () {
  return src(path.input.sass)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss([ autoprefixer(), postcss_clean() ]))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(path.output.css))
    .pipe(browser_sync.stream())
}

// function js_task () {
//   return src([path.input.js])
//     .pipe(concat('main.js'))
//     .pipe(babel())
//     .pipe(uglify())
//     .pipe(dest(path.output.js))
//     .pipe(browser_sync.stream())
// }

function images_task () {
  return src([path.input.images], { allowEmpty: true })
    .pipe(
      image_resize({
        width: 1920,
        cover: true, // Maintain aspect ratio
        upscale: false, // Don't resize up if smaller than 1920px
        quality: 0.50,
      }))
    .pipe(dest(path.output.images))
    .pipe(browser_sync.stream())
}

function watch_task () {
  browser_sync.init({
    server: {
      baseDir: path.root,
      // proxy: "localsite.dev"
    }
  })
  watch (
    [
      path.input.fonts,
      // path.input.js,
      path.input.html, 
      path.input.images,
      path.input.sass, 
      path.input.videos,
      path.partials.molecules,
      path.partials.headers,
      path.partials.includes,
      path.partials.layouts,
    ],
    parallel(
      html_task, 
      sass_task, 
      // js_task,
      images_task,
    ),
  )
}

exports.default = series(
  parallel(html_task, sass_task, images_task),
  watch_task,
)
