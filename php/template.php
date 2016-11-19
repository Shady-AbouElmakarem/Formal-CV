<?php
$email=$_POST['email'];
require("../php/connect.inc.php");
$query = "SELECT `template` FROM `users` WHERE `email` = '$email'";
$query_run=mysqli_query($con,$query);
$checkrow = mysqli_fetch_array($query_run);
echo $checkrow['template'];
?>
