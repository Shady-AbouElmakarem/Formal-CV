<?php
$email=$_POST['email'];
require("../php/connect.inc.php");
$query = "SELECT `cv` FROM `users` WHERE `email` = '$email'";
$query_run=mysqli_query($con,$query);
$checkrow = mysqli_fetch_array($query_run);
echo $checkrow['cv'];
?>
