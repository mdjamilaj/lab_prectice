<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jquery Qr code</title>
    <style>
    
.qr-code-generator {
width: 500px;
margin: 0 auto;
}

.qr-code-generator * {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

#qrcode {
width: 128px;
height: 128px;
margin: 0 auto;
text-align: center;
}

#qrcode a {
font-size: 0.8em;
}

.qr-url, .qr-size {
padding: 0.5em;
border: 1px solid #ddd;
border-radius: 2px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.qr-url {
width: 79%;
}

.qr-size {
width: 20%;
}

.generate-qr-code {
display: block;
width: 100%;
margin: 0.5em 0 0;
padding: 0.25em;
font-size: 1.2em;
border: none;
cursor: pointer;
background-color: #e5554e;
color: #fff;
}
    </style>
</head>
<body>
<div class="qr-code-generator">

<input type="text" class="qr-url" placeholder="URL or Text">
<input type="number" class="qr-size" value="128" min="20" max="500">

<button class="generate-qr-code">Generate</button>

<br>

<div id="qrcode"></div>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
</div>
</body>
</html>





<script>

$('.generate-qr-code').on('click', function(){

// Clear Previous QR Code
$('#qrcode').empty();

// Set Size to Match User Input
$('#qrcode').css({
'width' : $('.qr-size').val(),
'height' : $('.qr-size').val()
})

// Generate and Output QR Code
$('#qrcode').qrcode({width: $('.qr-size').val(),height: $('.qr-size').val(),text: $('.qr-url').val()});

});

</script>