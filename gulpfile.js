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
 mix.sass("app.scss", 'public/bootstrap/');
});
elixir(function(mix) {
 mix.styles([
  "public/bootstrap/normalize.css",
  "public/bootstrap/app.css"
 ], 'public/bootstrap/style.css', 'public/bootstrap');
});