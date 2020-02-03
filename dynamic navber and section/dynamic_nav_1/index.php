<?php 

$con = mysqli_connect("localhost","root","","dynamic_control");






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dynamic Nav</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    
</head>
<body>
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">Logo</a>
    </div>
<nav>
  <div class="nav-mobile">
    <a id="nav-toggle" href="#!"><span></span></a>
  </div>
  <ul class="nav-list">
    <li><a href="#!">Home</a></li>
    <li><a href="#!">Dynamic_nav</a>
    <ul class="nav-dropdown">

    <li><a href="#!">Web Development</a></li>
    <li><a href="#!">Graphic Design</a></li>


    <?php $query = mysqli_query($con, "SELECT * FROM dynamic_nav_field");

            while($row = mysqli_fetch_assoc($query)){ ?>


        <li><a href="<?php echo $row['nav_link']; ?>"><?php echo $row['nav_name']; ?></a></li>


        <?php } ?>


      </ul>
    </li>
    <li><a href="#!">Services</a>
      <ul class="nav-dropdown">
        <li><a href="#!">Web Design</a></li>
        <li><a href="#!">Web Development</a></li>
        <li><a href="#!">Graphic Design</a></li>
      </ul>
    </li>
    <li><a href="#!">Pricing</a></li>
    <li><a href="#!">Contact</a></li>
  </ul>
</nav>
    
      </div>
</section>

<?php $query = mysqli_query($con, "SELECT * FROM dynamic_nav_field");

if(mysqli_num_rows($query) > 0){ ?>

<!-- Counter section  -->
<section class="counter-section">

    
        <?php $query = mysqli_query($con, "SELECT * FROM dynamic_nav_field");

            while($row = mysqli_fetch_assoc($query)){   echo $row['section']; } ?>


  </section>
  <!-- Counter section end -->



<?php } ?>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="style.js"></script>
</body>
</html>