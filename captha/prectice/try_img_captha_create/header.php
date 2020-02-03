<?php
header ("Content-type: image/jpg");
///// Create the image ////////
$im = @ImageCreate (100,40)
or die ("Cannot Initialize new GD image stream");

$background_color = ImageColorAllocate ($im, 204, 204, 204); // Assign background color
$text_color = ImageColorAllocate ($im, 51, 51, 255);      // text color is given 

ImageString($im,5,10,10,'PLUS2NET',$text_color); // Random string  from session added 

ImageJpeg ($im); // image displayed
imagedestroy($im); // Memory allocation for the image is removed. 
?>