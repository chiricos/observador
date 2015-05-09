var elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
 mix.sass("app.scss", 'public/css/');
});
elixir(function(mix) {
 mix.styles([
  "public/css/normalize.css",
  "public/css/app.css"
 ], 'public/css/style.css', 'public/css');
});