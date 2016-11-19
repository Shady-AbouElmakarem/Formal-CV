<?php
  $Email=$_POST['email'];
  $value = $_POST["cv"];
  require("../php/connect.inc.php");
  mysqli_query($con,"UPDATE users SET cv ='$value' WHERE email = '$Email'");
  $apikey = 'adc7565b-8ac5-4927-a165-7b0650246b7e';
  $postdata = http_build_query(
  array(
    'apikey' => $apikey,
    'value' => "<div style='padding: 0 10%;'>".$value."<div>",
    'MarginBottom' => '30',
    'MarginTop' => '20'
  ));
  $opts = array('http' =>
  array(
    'method'  => 'POST',
    'header'  => 'Content-type: application/x-www-form-urlencoded',
    'content' => $postdata
  )
);
$context  = stream_context_create($opts);
$result = file_get_contents('http://api.html2pdfrocket.com/pdf', false, $context);
$file = $Email.'.pdf';
file_put_contents($file, $result);
?>
