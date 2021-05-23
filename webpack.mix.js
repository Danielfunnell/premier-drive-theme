// webpack.mix.js

let mix = require('laravel-mix');

mix.js('src/app.js', 'js')
   .sass('src/app.scss', 'css')
   .options({
      processCssUrls: false
   })
   .setPublicPath('dist');

   