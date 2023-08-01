mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
       // Add any other PostCSS plugins you may need
   ])
   .postCss('resources/css/carousel.css', 'public/css', [
       // Add any other PostCSS plugins you may need
   ]);
