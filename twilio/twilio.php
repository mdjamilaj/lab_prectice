<?php
$number = $_POST['From'];
$body = $_POST['Body'];

header('Content-Type: text/xml');

$content =  explode(" ", $body);
$roll = $content[0];
$class = $content[1];
$school = $content[2];



$link = mysqli_connect("localhost", "root", "", "twilio");

 $roll_check = mysqli_query($link, "SELECT * FROM twilio_stu WHERE class = '$class' and roll = '$roll'");

    if (mysqli_num_rows($roll_check) == 1) {

    	$row = mysqli_fetch_assoc($_result);
?>

<Response>
    <Message>
        Hello <?php echo $number ?>.
        You said <?php echo $body ?>.
        Your GPA - <?php echo $body ?>
    </Message>
</Response>


<?php }else{ ?>


	<Response>
    	<Message>
			<?php echo $number ?> This Roll number Not found! 
	    </Message>
	</Response>


<?php } ?>