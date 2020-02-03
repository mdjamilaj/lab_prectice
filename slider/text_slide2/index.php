<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="index.css">
</head>
<body>

<div class="container">
     
<h1 class="text-center">Css Only Carousel</h1>
<!-- Css Carousela-->
<div class="flex-container">
<div class="carrousela">
			<h2>Title</h2>						
			<input type="radio" name="slides" id="radio-1" checked>
			<input type="radio" name="slides" id="radio-2">
			<input type="radio" name="slides" id="radio-3">
			<input type="radio" name="slides" id="radio-4">
			<ul class="slides">
				 <li class="slide">
            <p>
               <q>It was a pleasure to work with him</q> 
              <span class="author">
              <img src="img/004.jpg">
              MD jamil Aj
              </span>
            </p>
           </li>        
            <li class="slide">
              <p>
                <q>He is a good friend of mine</q> 
                <span class="author">
                  <img src="img/001.jpg">
                  Sinatra
                </span>
              </p>
           </li>
          <li class="slide">
             <p>
                <q>This is pretty cool</q> 
                <span class="author">
                <img src="img/002.jpg">
                Alf
                </span>
             </p>
          </li>
          <li class="slide">
            <p>
              <q>This is awesome. Only Css you say?</q> 
              <span class="author">
                <img src="img/003.jpg">
                The octocat
              </span>
            </p>
           </li>
			</ul>
			<div class="slidesNavigation">
				<label for="radio-1" id="dotForRadio-1"></label>
				<label for="radio-2" id="dotForRadio-2"></label>
				<label for="radio-3" id="dotForRadio-3"></label>
				<label for="radio-4" id="dotForRadio-4"></label>
			</div>
</div>		
</div>	
</div>
</body>
</html>