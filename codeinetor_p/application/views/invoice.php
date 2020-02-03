<!DOCTYPE html>
<html>
<!-- <apex:page renderas="{!BLANKVALUE($CurrentPage.parameters.r, 'html')}" standardController="Account" showHeader="false" applyhtmltag="false"> -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AJ~Online_Shop Product Seller and managing product collect product and sell to customer Site</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>font_end/dist/css/style.css">

  <style>

  body { 
  font: 12pt Georgia, "Times New Roman", Times, serif; 
  line-height: 1.3;}

      @page { 
        /* switch to landscape */ 
      size: landscape; 
      /* set page margins */ 
      margin: 0.5cm; 
      /* Default footers */ 
      @bottom-left { 
        content: "Department of Strategy"; 
      } 
      @bottom-right { 
        content: counter(page) " of " counter(pages); 
      }
    }

    #header { 
      position: fixed; 
      width: 100%; 
      top: 0; 
    }
    #footer { 
      position: fixed; 
      width: 100%; 
      bottom: 2; 
    }

    body {
        padding-top: 280px;
    }
    .custom-page-start {
        margin-top: 200px;
    }
        
  </style>
</head>
<body>
<div id="HTMLtoPDF">
	<!-- <div id="html-2-pdfwrapper"> -->

<div class="mt-5" style="">

		<header class="header" id="header" name="MyCustomHeader" style="overflow: hidden;">
    <div class="header">
      <nav style="text-aling: center">
        <img src="<?php echo base_url() ?>/font_end/logo.png" style="width: 60px; display: flex; margin: auto;" class="mb-2">
      <h2 style="margin: auto; text-align: center;">INVOICE</h2>
      <div style="margin: auto; text-align: center; margin-bottom: 10px">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </nav>
      <div style="width: 80%; margin: auto; padding-top: 15px;" class="card-group">
      <div id="project" style="width: 50%; float: left;">
          <div>INVOICE# :<!-- <?php echo $row->id; ?> --></div>
          <div>Customer : sddgdsf</div>
          <div>ADDRESS : fsdsfdf</div>
          <div>EMAIL : fddsf@gmail.com</div>
          <div>Phone : 0125154</div>
          <div>DATE : <!-- <?php echo $row->date_time; ?> --></div>
      </div>
        <div style="float: right" class="pull-right">
          <div style="font-size: 20px; font-weight: bold;color: red; font-family: Arial, Helvetica, sans-serif;">AJ Shopping</div>
          <div>455 Foggy Heights,<br /> Zindabazar, Sylhet</div>
          <div>(602) 519-0450</div>
          <div><a href="https://mdjamilaj@mail.com">AJShoping@mail.com</a></div>
        </div>
      </div>
      </div>
</header>

<div class="custom-page-start" style="page-break-before: always;">

<main style="margin-top: 10px;"  style="overflow: hidden;">
      <table class="table mt-5">
        <thead>
          <tr>
            <th class="service">Name</th>
            <th class="desc">PRO_Description</th>
            <th id="editor">PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        	<?php 

        	$total = 0;
		 	foreach ($invoice as $row)   { ?>

                <tr>
                    <td class="service"><?php echo ucwords($row->product_name); ?></td>
                    <td class="desc" style="max-width: 250px !important; overflow: hidden !important;"><?php echo ($row->product_description); ?></td>
                    <td class="unit"><?php echo ($row->product_price); ?></td>
                    <td class="qty"><?php echo ($row->product_qty); ?></td>
                    <td class="total">$<?php echo number_format (($row->product_qty * $row->product_price),2); ?></td>
                </tr>

            <?php

                $total = $total + ($row->product_qty * $row->product_price);

             } ?>
             <tr>
            <td colspan="4" class="grand total" style="font-weight: bold; font-size: 20px; text-align: right;">GRAND TOTAL</td>
            <td class="grand total" style="font-weight: bold; font-size: 20px">$ <?php echo number_format($total, 2); ?></td>
          </tr>
        </tbody>
      </table>
  </main>

  </div>
  <footer name="MyCustomFooter" id="footer">
      <div id="notices" style="text-align: center;">
        <div style="font-size: 20px; font-weight: bold;color: red; font-family: Arial, Helvetica, sans-serif;">AJ SHOPPING</div>
        <p style="font-weight: bold;color: black;">455 Foggy Heights, AZ 85004, Sylhet</p><hr>
        <div><h4 style="font-size: 10px; font-weight: 800;">Copy-Right &copy; 2020 | Design by ITLAB_soliutions.</h4></div>
      </div>
  </footer>    
</div><br><br><br>
</div>
<!-- </div> -->

<!-- here we call the function that makes PDF -->
<a href="#" onclick="HTMLtoPDF()">Download PDF</a>

<script src="<?php echo base_url() ?>/font_end/js/jspdf.js"></script>
<script src="<?php echo base_url() ?>/font_end/js/jquery-2.1.3.js"></script>
<script src="<?php echo base_url() ?>/font_end/js/pdfFromHTML.js"></script>
</body>
<!-- </apex:page> -->
</html>










<!-- 
<?php



// function getIndianCurrency($number)
// {
//     $decimal = round($number - ($no = floor($number)), 2) * 100;
//     $hundred = null;
//     $digits_length = strlen($no);
//     $i = 0;
//     $str = array();
//     $words = array(0 => '', 1 => 'one', 2 => 'two',
//         3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
//         7 => 'seven', 8 => 'eight', 9 => 'nine',
//         10 => 'ten', 11 => 'eleven', 12 => 'twelve',
//         13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
//         16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
//         19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
//         40 => 'forty', 50 => 'fifty', 60 => 'sixty',
//         70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
//     $digits = array('', 'hundred','thousand','lakh', 'crore');
//     while( $i < $digits_length ) {
//         $divider = ($i == 2) ? 10 : 100;
//         $number = floor($no % $divider);
//         $no = floor($no / $divider);
//         $i += $divider == 10 ? 1 : 2;
//         if ($number) {
//             $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
//             $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
//             $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
//         } else $str[] = null;
//     }
//     $Rupees = implode('', array_reverse($str));
//     $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Sense' : '';
//     return ($Rupees ? $Rupees . 'Dollar ' : '') . $paise;
// }

?> -->








