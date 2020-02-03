<?php
// Example 1
$pizza  = "222 106496 ten";
$pieces = explode(" ", $pizza);
echo $pieces[0]."<br>"; // piece1
echo $pieces[1]."<br>"; // piece2
echo $pieces[2]."<br>"; // piece3

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user."<br>"; // foo
echo $pass."<br>"; // *

?>