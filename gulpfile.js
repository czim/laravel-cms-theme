var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix
        .sass('app.scss', 'resources/assets/build/css')
        .browserify('app.js', 'resources/assets/build/js/app.js');
});
