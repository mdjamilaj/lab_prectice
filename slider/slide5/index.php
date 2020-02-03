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
        <div class="product-slider">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active"> <img src="http://placehold.it/1600x700?text=Product+01"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+02"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+03"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+04"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+05"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+06"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+07"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+08"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+09"> </div>
      <div class="item"> <img src="http://placehold.it/1600x700?text=Product+10"> </div>
    </div>
  </div>
  <div class="clearfix">
    <div id="thumbcarousel" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        <div class="item active">
          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+01"></div>
          <div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+02"></div>
          <div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+03"></div>
          <div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+04"></div>
          <div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+05"></div>
        </div>
        <div class="item">
          <div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+06"></div>
          <div data-target="#carousel" data-slide-to="6" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+07"></div>
          <div data-target="#carousel" data-slide-to="7" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+08"></div>
          <div data-target="#carousel" data-slide-to="8" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+08"></div>
          <div data-target="#carousel" data-slide-to="9" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+10"></div>
        </div>
      </div>
      <!-- /carousel-inner --> 
      <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"> <i class="fas fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fas fa-angle-right" aria-hidden="true"></i> </a> </div>
    <!-- /thumbcarousel --> 
    
  </div>
</div>
 <!-- Javascript -->
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        
    </body>

</html>


<!-- 
<script>
        // Instantiate the Bootstrap carousel
    $('.multi-item-carousel').carousel({
    interval: false
    });

    // for every slide in carousel, copy the next slide's item in the slide.
    // Do the same for the next, next item.
    $('.multi-item-carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    if (next.next().length>0) {
        next.next().children(':first-child').clone().appendTo($(this));
    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
    });
</script> -->