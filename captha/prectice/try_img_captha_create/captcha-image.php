<?php

session_start();
if(isset($_SESSION['my_captcha']))
{
unset($_SESSION['my_captcha']); // destroy the session if already there
}


$string1="abcdefghijklmnopqrstuvwxyz";
$string2="1234567890";
$string=$string1.$string2;
$string= str_shuffle($string);
// change the number to change number of chars
$random_text= substr($string,0,8);



$im = @ImageCreate (80, 20)
or die ("Cannot Initialize new GD image stream");
// Assign background color
$background_color = ImageColorAllocate ($im, 204, 204, 204); 
// text color is given
$text_color = ImageColorAllocate ($im, 51, 51, 255);
// Random string  from session added 
ImageString($im,5,5,2,$_SESSION['my_captcha'],$text_color);

ImagePng ($im); // image displayed
imagedestroy($im); // Memory allocation for the image is removed. 