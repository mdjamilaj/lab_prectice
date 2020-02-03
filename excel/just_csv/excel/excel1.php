<!DOCTYPE html>
<html>
<head>
	<title>Excel read json</title>
</head>
<body>

	<input type="file" id="my_file_input" />
	<div id='my_file_output'></div>

</body>
</html>

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

   <script lang="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.js"></script>


<script type="text/javascript">


			var oFileIn;

		$(function() {
		    oFileIn = document.getElementById('my_file_input');
		    if(oFileIn.addEventListener) {
		        oFileIn.addEventListener('change', filePicked, false);
		    }
		});


		function filePicked(oEvent) {
		    // Get The File From The Input
		    var oFile = oEvent.target.files[0];
		    var sFilename = oFile.name;
		    // Create A File Reader HTML5
		    var reader = new FileReader();
		    
		    // Ready The Event For When A File Gets Selected
		    reader.onload = function(e) {
		        var data = e.target.result;
		        // console.log(data);
		        var cfb = XLS.CFB.read(data, {type: 'binary'});
		        console.log(cfb);
		        var wb = XLS.parse_xlscfb(cfb);
		        // Loop Over Each Sheet
		        wb.SheetNames.forEach(function(sheetName) {
		            // Obtain The Current Row As CSV
		            var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);   
		            var oJS = XLS.utils.sheet_to_row_object_array(wb.Sheets[sheetName]);   

		            $("#my_file_output").html(sCSV);
		            console.log(oJS)
		        });
		    };
		    
		    // Tell JS To Start Reading The File.. You could delay this if desired
		    reader.readAsBinaryString(oFile);
		}


// 		function filePicked(oEvent) {
// // Get The File From The Input
// var oFile = oEvent.target.files[0];
// var sFilename = oFile.name;
// // Create A File Reader HTML5
// var reader = new FileReader();

// // Ready The Event For When A File Gets Selected
// reader.onload = function(e) {
//     var data = e.target.result;
//     var cfb = XLSX.read(data, {type: 'binary'});
//     console.log(cfb)
//     cfb.SheetNames.forEach(function(sheetName) {
//         // Obtain The Current Row As CSV
//         var sCSV = XLS.utils.make_csv(cfb.Sheets[sheetName]);   
//         var oJS = XLS.utils.sheet_to_json(cfb.Sheets[sheetName]);   

//         $("#my_file_output").html(sCSV);
//         console.log(oJS)
//         $scope.oJS = oJS
//     });
// };

// // Tell JS To Start Reading The File.. You could delay this if desired
// reader.readAsBinaryString(oFile);}

</script>