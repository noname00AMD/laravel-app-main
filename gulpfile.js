var gulp = require("gulp")
var sourcemaps = require('gulp-sourcemaps');
var sass = require("gulp-sass")(require("sass"))
// var nodemon = require("nodemon")



gulp.task("sass", function () {
  return gulp.src('./resources/sass/**.sass')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write('/'))
    .pipe(gulp.dest('./public/css/'))
})

gulp.watch("./resources/sass/", gulp.series(["sass"]))
gulp.task("default", gulp.series(["sass"]))

