<!DOCTYPE html>
<html>
<head>
	<title>barcode</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="jquery-barcode.js"></script>
    <script type="text/javascript">


    	$("#demo").barcode(

		"1234567890128",// Value barcode (dependent on the type of barcode)

		"ean13" // type (string)

		);



    </script>
</head>
<body>


	<div id="demo"></div>

</body>
</html>