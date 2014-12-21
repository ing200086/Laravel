var elixir = require("laravel-elixir");
var phpcs = require('laravel-elixir-phpcs');
var behat = require('laravel-elixir-behat');

elixir(function(mix) {
    mix.publish('normalize-css/normalize.css',
                        'public/css/vendor/normalize.css')
            .publish('jquery/dist',
                            'public/js/vendor/jquery')
            .publish('modernizr/modernizr.js',
                            'public/js/vendor/modernizr.js')
            .publish('font-awesome/css',
                            'public/css/vendor/font-awesome/css')
            .publish('font-awesome/fonts',
                            'public/css/vendor/font-awesome/fonts')
            .sass("app.scss")
            .phpcs([
                    'app/**/*.php',
                    'tests/**/*.php'
                ], {
                    bin: 'vendor\\bin\\phpcs',
                    standard: 'PSR2'
                })
            .phpSpec()
            .behat();
});