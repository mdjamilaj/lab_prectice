









<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>vbgfffff</title>
<meta name="description" content="example-MONTH-function - php mysql examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Month Search</h2>

<form action="" method="POST">

<div class="col-sm-6">
    <input type="number" name="month" id="" placeholder="Enter Month">
    <input type="number" name="year" id="" placeholder="Enter Year">
    <input type="submit" name="search" class="btn btn-success" value="Search">
</div>

</form>

<table class='table table-bordered'>
<tr>
<!-- <th>MONTH from <?php //if (isset($_POST['search'])) 
//{ echo $_POST['year']; ."/" . $_POST['month'];} ?></th> -->
<th>Date1</th>
<th>Date2</th>
</tr>

</tbody>

<tr>



    <?php
        $con = mysqli_connect("localhost", "root", "", "s_date");
        if (isset($_POST['search'])) {

            $month = $_POST['month'];
            $year = $_POST['year'];


            $query = "SELECT * FROM `date` WHERE YEAR(date1) = '$year' AND MONTH(date1) >= '$month' AND MONTH(date2) <= '$month'";
            $result = mysqli_query($con, $query);


            


            while ($row = mysqli_fetch_assoc($result)) { 
                
                // print_r($row);

                ?>



                    <td> <?php echo $row['date1']; ?> </td>
                    <td> <?php echo $row['date2']; ?></td>

                    <?php } } ?>

</tr>

</table>
</div>
</div>
</div>
</body>
</html>