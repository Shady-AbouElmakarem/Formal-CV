<?php
require('connect.inc.php');
$temp=$_POST['temp'];
$section=$_POST['section'];
$query="SELECT `$section` FROM `template` WHERE `temp` ='$temp'";
$query_run=mysqli_query($con,$query);
$checkrow = mysqli_fetch_array($query_run);
echo $checkrow[$section];
?>
