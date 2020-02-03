<!DOCTYPE html>
<html>
<head>
	<title>Excel to json convert</title>
</head>
<body>
	<h1>Excel change Json</h1>
<input type="file" id="fileUploader" name="fileUploader" accept=".xls, .xlsx">
<div id='my_file_output'></div>

</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.4/xlsx.full.min.js" integrity="sha256-w4FbLoep/QMisX0AubgVd6NdLz1IBt9b1DATsT+hP2c=" crossorigin="anonymous"></script>

<script
  src="https://code.jquery.com/jquery-1.11.0.js"
  integrity="sha256-zgND4db0iXaO7v4CLBIYHGoIIudWI5hRMQrPB20j0Qw="
  crossorigin="anonymous"></script>

<script>


			$(document).ready(function(){
				$("#fileUploader").change(function(evt){
					var selectedFile = evt.target.files[0];
					var reader = new FileReader();
					reader.onload = function(event) {
						var data = event.target.result;
						var workbook = XLSX.read(data, {
							type: 'binary'
						});
						workbook.SheetNames.forEach(function(sheetName) {
							console.log(sheetName);
							console.log(data);

							var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sherts[sheetName]);
							var json_object = JSON.stringify(XL_row_object);
							document.getElementById("jsonObject").innerHTML = json_object;
						})
					};

					reader.onerror = function(event) {
						console.error("File could not be read! Code" + event.target.error.code);
					};
					reader.readAsBinaryString(selectedFile);
				})
			})


</script>