var elixir = require("laravel-elixir");
var phpcs = require('laravel-elixir-phpcs');
var behat = require('laravel-elixir-behat');

elixir(function(mix) {
    mix.sass("app.scss")
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