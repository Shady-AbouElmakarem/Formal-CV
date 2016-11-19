<?php
require("../php/connect.inc.php");
$email=$_POST['email'];
$clear= "UPDATE users SET cv='' WHERE email='$email'";
$clear_run=mysqli_query($con,$clear);
?>
