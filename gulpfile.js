var elixir = require("laravel-elixir");
require('laravel-elixir-behat');

elixir(function(mix) {
    mix.phpSpec()
            .behat();
});