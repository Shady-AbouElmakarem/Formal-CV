<?php
$temp=$_POST['temp'];
$email=$_POST['email'];
require("../php/connect.inc.php");
$query = "UPDATE `users` SET `template`='$temp' WHERE `email`='$email'";
mysqli_query($con,$query);
?>
