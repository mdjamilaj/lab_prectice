<html>
<head>
<title>Demo of a  form showing  Captcha image </title>
<script type="text/javascript">
function reload()
{
img = document.getElementById("capt");
img.src="captcha-image.php?rand_number=" + Math.random();
}
</script>

</head>
<body >

<form type=post action=captcha-demo-data.php><input type=text name=t1>
<img src=captcha-image.php id="capt">
<input type=button onClick=reload(); value='Reload image'>
<input type=submit value='submit'>
</form>
</body>
</html>