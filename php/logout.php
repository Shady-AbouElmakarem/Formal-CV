<?php
$ip=$_SERVER['REMOTE_ADDR'];
session_start();
require("connect.inc.php");
  unset($_SESSION[$ip]);
  $query3 = "UPDATE users SET ip='' WHERE ip='$ip'";
  $query3_run=mysqli_query($con,$query3)
?>
