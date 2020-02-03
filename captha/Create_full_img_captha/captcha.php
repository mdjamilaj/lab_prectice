<!-- captcha.php -->
 
<?php
session_start();
?>
 
    <title>Generate captcha image</title>
    <body style="background-color:#ccc;">
 
<?php
    create_image();
    display();
    function display()
    {
?>
       <div style="text-align:center;">
            <h3>TYPE THE TEXT YOU SEE IN THE IMAGE</h3>
            <div style="display:block;margin-bottom:20px;margin-top:20px;">
                <img src="captcha_image.png">
            </div>
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="submit" value="refresh captcha">
            </form>
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="POST"/ >
                <input type="text" name="input" required/>
                <input type="hidden" name="flag" value="1"/>
                <input type="submit" value="submit" name="submit"/>
            </form>
            
        </div>      
 
 
<?php
    }
 
    function  create_image()
    {
        $image = imagecreatetruecolor(200, 50);       
        $background_color = imagecolorallocate($image, 255, 255, 255);  
        imagefilledrectangle($image,0,0,200,50,$background_color); 
 
        $line_color = imagecolorallocate($image, 64,64,64);
        $number_of_lines=rand(3,7);
 
        for($i=0;$i<$number_of_lines;$i++)
        {
            imageline($image,0,rand()%50,250,rand()%50,$line_color);
        }
 
        $pixel = imagecolorallocate($image, 0,0,255);
        for($i=0;$i<500;$i++)
        {
            imagesetpixel($image,rand()%200,rand()%50,$pixel);
        }  
 
        $allowed_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $length = strlen($allowed_letters);
        $letter = $allowed_letters[rand(0, $length-1)];
        $word='';
        $text_color = imagecolorallocate($image, 0,0,0);
        $cap_length=6;// No. of character in image
        for ($i = 0; $i< $cap_length;$i++)
        {
            $letter = $allowed_letters[rand(0, $length-1)];
            imagestring($image, 5,  5+($i*30), 20, $letter, $text_color);
            $word.=$letter;
        }
 
        $_SESSION['captcha_string'] = $word;
 
        imagepng($image, "captcha_image.png");
    }
?>
    </body>



    <?php

if(isset($_POST['submit']))
{
    $text = $_POST['input'];

    if(!empty($text)){

    echo $text."<br>";
    echo $_SESSION['captcha_string'];

        if($_SESSION['captcha_string']==$text)


            {
                echo "Thank you. You can proceed";
            }
            else
            {
                echo "Sorry. Try again";
            }
            unset($_SESSION['captcha_string']);

        }
        
        else{
            echo "OPPS!! you don't type any value";
        }
}