<html>
  <head>
    <style>
      * {
          color:#7F7F7F;
          font-family:Arial,sans-serif;
          font-size:12px;
          font-weight:normal;
      }    
      #config{
          overflow: auto;
          margin-bottom: 10px;
      }
      .config{
          float: left;
          width: 200px;
          height: 250px;
          border: 1px solid #000;
          margin-left: 10px;
      }
      .config .title{
          font-weight: bold;
          text-align: center;
      }
      .config .barcode2D,
      #miscCanvas{
        display: none;
      }
      #submit{
          clear: both;
      }
      #barcodeTarget,
      #canvasTarget{
        margin-top: 20px;
      }      
            div#generator {
    position: relative;
    transform: translate(10px, 10px);
    background: #2a0a8c;
    width: 31%;
    height: 212px;
    margin: auto;
    padding: 7px;
    text-align: center;
}

      h4 {
        text-align: center;
        width: 171px;
        height: 18px;
        margin-top: 10px;
        padding: 10px;
        margin: auto;
        background: #5c1096;
        color: wheat;
        font-size: 16px;
  }
      input#barcodeValue {
        border: 1px solid #ff005e;
        margin: 5px;
        height: 33px;
        border-radius: 3rem;
        padding: 8px;
        text-align: center;
    }

    input#barcodeValue:focus{
          color: #ff0000;
    font-weight: bold;
    background: rebeccapurple;
    }
    input[type="button"] {
    background: #00060c;
    height: 34px;
    margin-top: 7px;
    color: #ffffff;
}
/*#barcodeTarget, #canvasTarget {
    margin-top: 20px;
    text-align: center;
    position: relative;
    transform: translate(163%, 3%);
}*/
    </style>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="jquery-barcode.js"></script>
    <script type="text/javascript">
    
      function generateBarcode(){
        var value = $("#barcodeValue").val(); 
        var btype = "code128"; //ean8/ean13/upc/std25/int25/code11/code39/code93/code128/codabar/msi/datamatrix
        var renderer = "css"; ////css/bmp/svg/canvas

        var settings = {
          output: "css",
          bgColor: "#ffffff",
          color: "#000000",
          barWidth: "1",
          barHeight: "50",
          moduleSize: "5",
          // posX: $("#posX").val(),
          // posY: $("#posY").val(),
          addQuietZone: "1"
        };
        if ($("#rectangular").is(':checked') || $("#rectangular").attr('checked')){
          value = {code:value, rect: true};
        }
        if (renderer == 'canvas'){
          clearCanvas();
          $("#barcodeTarget").hide();
          $("#canvasTarget").show().barcode(value, btype, settings);
        } else {
          $("#canvasTarget").hide();
          $("#barcodeTarget").html("").show().barcode(value, btype, settings);
        }
      }
          
      function showConfig1D(){
        $('.config .barcode1D').show();
        $('.config .barcode2D').hide();
      }
      
      function showConfig2D(){
        $('.config .barcode1D').hide();
        $('.config .barcode2D').show();
      }
      
      function clearCanvas(){
        var canvas = $('#canvasTarget').get(0);
        var ctx = canvas.getContext('2d');
        ctx.lineWidth = 1;
        ctx.lineCap = 'butt';
        ctx.fillStyle = '#FFFFFF';
        ctx.strokeStyle  = '#000000';
        ctx.clearRect (0, 0, canvas.width, canvas.height);
        ctx.strokeRect (0, 0, canvas.width, canvas.height);
      }
      
      $(function(){
        $('input[name=btype]').click(function(){
          if ($(this).attr('id') == 'datamatrix') showConfig2D(); else showConfig1D();
        });
        $('input[name=renderer]').click(function(){
          if ($(this).attr('id') == 'canvas') $('#miscCanvas').show(); else $('#miscCanvas').hide();
        });
        generateBarcode();
      });
  
    </script>
  </head>
  <body>
    <div id="generator">
      <h4>Please fill in the code : </h4>
      <input type="text" id="barcodeValue" value="12345670">
      <div id="config">
      <div id="submit">
        <input type="button" onclick="generateBarcode();" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Generate the barcode&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;">
      </div>
        
    </div>
    
    <div id="barcodeTarget" class="barcodeTarget"></div>
    <canvas id="canvasTarget" width="150" height="150"></canvas> 
  
  </body>
</html>