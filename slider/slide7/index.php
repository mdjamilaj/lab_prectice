<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bootstrap-4 Carousel-4</title>

        <!-- CSS -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
    </head>

    <body>
        <!-- Top content -->
        
  <main>

<div id="carousel">

   <div class="hideLeft">
    <img src="https://i1.sndcdn.com/artworks-000165384395-rhrjdn-t500x500.jpg">
  </div>

  <div class="prevLeftSecond">
    <img src="https://i1.sndcdn.com/artworks-000185743981-tuesoj-t500x500.jpg">
  </div>

  <div class="prev">
    <img src="https://i1.sndcdn.com/artworks-000158708482-k160g1-t500x500.jpg">
  </div>

  <div class="selected">
    <img src="https://i1.sndcdn.com/artworks-000062423439-lf7ll2-t500x500.jpg">
  </div>

  <div class="next">
    <img src="https://i1.sndcdn.com/artworks-000028787381-1vad7y-t500x500.jpg">
  </div>

  <div class="nextRightSecond">
    <img src="https://i1.sndcdn.com/artworks-000108468163-dp0b6y-t500x500.jpg">
  </div>

  <div class="hideRight">
    <img src="https://i1.sndcdn.com/artworks-000064920701-xrez5z-t500x500.jpg">
  </div>

</div>

<div class="buttons">
  <button id="prev"><i class="fas fa-angle-left" aria-hidden="true"></i></button>
  <button id="next"><i class="fas fa-angle-right" aria-hidden="true"></i></button>
</div>

</main>
 <!-- Javascript -->
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        
    </body>

</html>



<script>
        function moveToSelected(element) {

        if (element == "next") {
          var selected = $(".selected").next();
        } else if (element == "prev") {
          var selected = $(".selected").prev();
        } else {
          var selected = element;
        }

        var next = $(selected).next();
        var prev = $(selected).prev();
        var prevSecond = $(prev).prev();
        var nextSecond = $(next).next();

        $(selected).removeClass().addClass("selected");

        $(prev).removeClass().addClass("prev");
        $(next).removeClass().addClass("next");

        $(nextSecond).removeClass().addClass("nextRightSecond");
        $(prevSecond).removeClass().addClass("prevLeftSecond");

        $(nextSecond).nextAll().removeClass().addClass('hideRight');
        $(prevSecond).prevAll().removeClass().addClass('hideLeft');

        }

        // Eventos teclado
        $(document).keydown(function(e) {
          switch(e.which) {
              case 37: // left
              moveToSelected('prev');
              break;

              case 39: // right
              moveToSelected('next');
              break;

              default: return;
          }
          e.preventDefault();
        });

        $('#carousel div').click(function() {
            moveToSelected($(this));
        });

        $('#prev').click(function() {
            moveToSelected('prev');
        });

        $('#next').click(function() {
            moveToSelected('next');
        });

</script> 