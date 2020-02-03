<?Php
session_start();
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>
<head>
<title> Admin </title>
</head>

<body >
<?Php
echo "Text as entered by user  : $_GET[t1] <br>";
echo "Captcha shown : $_SESSION[my_captcha] <br>";
if($_GET['t1'] == $_SESSION['my_captcha']){
echo "Captcha validation passed ";
}else {
echo "Captcha validation failed ";
}
unset($_SESSION['my_captcha']);

?>

</body>
</html>