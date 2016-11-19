<?php
require('connect.inc.php');
$email = $_REQUEST["c"];
mysqli_query($con,"DELETE FROM users WHERE email='$email'");
?>
