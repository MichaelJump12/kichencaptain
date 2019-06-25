
const mix = require('laravel-mix');

mix
  .autoload({
    jquery: ['$', 'jQuery', 'window.jQuery'],
  })
  .options({
    postCss: [
      require('postcss-import')(),
      require('postcss-preset-env')({
        stage: 1,
        features: {
          'nesting-rules': true,
        },
      }),
    ],
    clearConsole: true,
  })
  .js('public/js/app.js', 'public/dist')
  .postCss('public/css/app.css', 'public/dist');
