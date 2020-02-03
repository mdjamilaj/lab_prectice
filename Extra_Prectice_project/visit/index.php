<?php
$f = "visit.php";
if(!file_exists($f)){
	touch($f);
	$handle =  fopen($f, "w" ) ;
	fwrite($handle,0) ;
	fclose ($handle);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu-6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <style>
        div#clockdate {
            position: absolute;
            top: 30%;
            left: 40%;
            background: linear-gradient(135deg, #174aaf, #5aff00);
            height: 100px;
            width: 300px;
            text-align: center;
        }
        #clock{
            font-size: 43px;
            color: #ff00c8;
        }
        span{
            font-size: 23px;
            color: #0014ff;
        }
        #date{
            color: #fff;
        }
    </style>
</head>
<body>

<div class="visit p-3 m-4 bg-warning">
            <div class="pagevisit">
				<div class="visitcount">
					<?php
					$handle = fopen($f, "r");
					$counter = ( int ) fread ($handle,20) ;
					fclose ($handle) ;
					
					if(!isset($_POST["submit"])){
						$counter++ ;
					}
					
					echo "This Page is Visited ".$counter." Times";
					$handle =  fopen($f, "w" ) ;
					fwrite($handle,$counter) ;
					fclose ($handle) ;
					?>
				</div>
			</div>
</div>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="navbarclock.js"></script>
</body>
</html>