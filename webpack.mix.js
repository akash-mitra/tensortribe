const mix = require('laravel-mix');


// mix will use postcss with various plugins 
// such as tailwindcss and purgecss
//------------------------------------------------------
const tailwindcss = require('tailwindcss')
const purgecss = require('@fullhuman/postcss-purgecss')({
  // Specify the paths to all of the template files in your project 
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './resources/**/*.jsx',
    
  ],
  // Include any special characters you're using in this regular expression
  defaultExtractor: content => content.match(/[\w-/:]+(?<!:)/g) || []
})

// complile the sass with postcss 
//------------------------------------------------------
mix.sass('resources/sass/app.scss', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [ 
      tailwindcss('./tailwind.config.js'),
      purgecss 
    ],
  })


// compile the JS
//------------------------------------------------------
mix.js('resources/js/app.js', 'public/js');
    
