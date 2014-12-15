var gulp       = require('gulp');
var less        = require('gulp-less');
var sass       = require('gulp-sass');
var minify     = require('gulp-minify-css');
var concat   = require('gulp-concat');
var uglify      = require('gulp-uglify');
var rename = require('gulp-rename');
var notify     = require('gulp-notify');
var phpunit = require('gulp-phpunit');
var behat    = require('gulp-behat');
var _            = require('lodash');

var paths = {
    'dev': {
        'less': './resources/assets/less/',
        'sass': './resources/assets/sass/',
        'js': './resources/assets/js/',
        'vendor': './resources/assets/vendor/',
        'tests': './tests/'
    },
    'production': {
        'css': './public/assets/css/',
        'js': './public/assets/js/'
    }
}

// CSS
gulp.task('css', function() {
    gulp.src(paths.dev.sass+'app.scss')
                        .pipe(sass())
                        .on('error', notify.onError(errNotification("sass", "Sass failure.")))
                        .pipe(gulp.dest(paths.production.css))
                        .pipe(minify({keepSpecialComments:0}))
                        .pipe(rename({suffix: '.min'}))
                        .pipe(gulp.dest(paths.production.css));
});

// JavaScript
gulp.task('js', function() {
    gulp.src([
                paths.dev.vendor+'jquery/dist/jquery.js',
                paths.dev.vendor+'bootstrap/dist/js/bootstrap.js',
                paths.dev.js+'js'
            ])
            .pipe(concat('app.min.js'))
            .pipe(uglify())
            .pipe(gulp.dest(paths.production.js));
});

// PHP Unit
gulp.task('phpunit', function() {
    var options = {debug: false, notify: true};

    gulp.src(paths.dev.tests+'**/*Test.php')
            .pipe(phpunit(''), options)
            .on('error', notify.onError(testNotification('fail', 'phpunit')))
            .pipe(notify(testNotification('pass', 'phpunit')));
});

// Behat
gulp.task('behat', function() {
    var options = {notify: true};

    gulp.src('behat.yml')
            .pipe(behat(''), options)
            .on('error', notify.onError(testNotification('fail', 'behat')))
            .pipe(notify(testNotification('pass', 'behat')));
});

function testNotification(status, pluginName, override) {
    var options = {
        title: (status == 'pass') ? (pluginName + ": Tests Passed") : (pluginName + ": Tests Failed"),
        message:  (status == 'pass') ? "\n\nAll Tests Passed.\n\n" : "\n\nOne or More Tests Failed...\n\n",
        icon: __dirname + '/node_modules/gulp-behat/assets/test-' + status + '.png'
    };

    options = _.merge(options, override);
    return options;
}

function errNotification(notifyTitle, notifyMessage) {
    var options = {
        title: notifyTitle,
        message: notifyMessage
    }
}

// Watch command
gulp.task('watch', function() {
    gulp.watch(paths.dev.sass+'/**/*.scss', ['css']);
    gulp.watch(paths.dev.js+'/**/*.js', ['js']);
    gulp.watch(paths.dev.tests+'**/*Test.php', ['phpunit']);
});

gulp.task('default', ['css', 'js', 'phpunit', 'watch']);