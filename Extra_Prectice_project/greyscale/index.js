$(function() {
    var body = $('body');
    var backgrounds = ['url(Gerberas-flowers-33763391-1440-900.jpg)', 'url(pexels-photo-462118.jpeg)'];
  var current = 0;
  
  function nextBackground() {
    body.css(
     'background',
      backgrounds[current = ++current % backgrounds.length]
   );
  
   setTimeout(nextBackground, 1000);
   }
   setTimeout(nextBackground, 1000);
     body.css('background', backgrounds[0]);
   });