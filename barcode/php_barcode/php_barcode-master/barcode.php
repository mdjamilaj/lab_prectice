<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<!-- onload="window.print();" -->
<body >


<br>  
   <div class="container">  
    <div class="col-md-6 mx-auto text-center">  
     <div class="header-title">  
      <h2 class="wv-heading--subtitle">  
       Barcodes Generator  
      </h2>  
     </div>  
    </div>  
   </div>  
   <br>  
   <div class="cotainer">  
    <div class="row justify-content-center">  
     <div class="col-md-8">  
      <div class="card">  
       <div class="card-header">  
        <h4 class="text-center">Bar-code</h4>
       </div>  
       <div class="card-body">  

<div class="row">  
         <div class="col-sm-12">  
          <table class="table table-sm">  
           <tr>  
            <th scope="col">#</th>  
            <th scope="col">Prodcut Name</th>  
            <th scope="col">Barcode</th>  
            <th scope="col">Price</th>  
           </tr> 

		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
		$rate = $_POST['rate'];

		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<tr><td>$i</td> <td>$product</td><td>".bar128(stripcslashes($_POST['product_id']))."</td> <td>".$rate." </td>  
             </tr>  &nbsp&nbsp&nbsp&nbsp";
		}

		?>
		</table>  
	</div>
	</div>  
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  
</body>
</html>


         
