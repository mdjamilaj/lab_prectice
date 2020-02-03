<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/jszip.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.8.0/xlsx.js"></script>
        <script src=" https://cdnjs.cloudflare.com/ajax/libs/xls/0.7.4-a/xls.js"></script>
        <title>Test Excel</title>
    </head>
    <body onload="load_excel();">
      <input type="file" id="my_file_input"/>
      <div id='my_file_output'></div>
<!--         <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script> -->
    </body>
</html>





<script type="text/javascript">
    

    function load_excel(){

  var oFileIn;
  oFileIn = document.getElementById('my_file_input');
    if(oFileIn.addEventListener) {
        oFileIn.addEventListener('change', filePicked, false);
    }

}



function filePicked(oEvent) {
// Get The File From The Input
var oFile = oEvent.target.files[0];
var sFilename = oFile.name;
// Create A File Reader HTML5
var reader = new FileReader();

// Ready The Event For When A File Gets Selected
reader.onload = function(e) {
    var data = e.target.result;
    var cfb = XLSX.read(data, {type: 'binary'});
    console.log(cfb)
    cfb.SheetNames.forEach(function(sheetName) {
        // Obtain The Current Row As CSV
        var sCSV = XLS.utils.make_csv(cfb.Sheets[sheetName]);   
        var oJS = XLS.utils.sheet_to_json(cfb.Sheets[sheetName]);   

        $("#my_file_output").html(sCSV);
        console.log(sCSV)
        $scope.oJS = oJS

        console.log(scope.oJS);
    });
};

// Tell JS To Start Reading The File.. You could delay this if desired
reader.readAsBinaryString(oFile);}




</script>