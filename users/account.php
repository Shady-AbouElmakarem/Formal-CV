<?php
$ip=$_SERVER['REMOTE_ADDR'];
require("../php/connect.inc.php");
session_start();
if(isset($_SESSION[$ip])){
  $checkquery = "SELECT `email` FROM `users` WHERE `ip` = '$ip'";
  $checkquery_run=mysqli_query($con,$checkquery);
  $checkrow = mysqli_fetch_array($checkquery_run);
  $logEmail=$checkrow['email'];
}
else{
  $checklog = "SELECT `email` FROM `users` WHERE `ip` = '$ip'";
  $checklog_run=mysqli_query($con,$checklog);
  $checklog_run_rows=mysqli_num_rows($checklog_run);
  if($checklog_run_rows!==0){
    $checkquery = "SELECT `email` FROM `users` WHERE `ip` = '$ip'";
    $checkquery_run=mysqli_query($con,$checkquery);
    $checkrow = mysqli_fetch_array($checkquery_run);
    $logEmail=$checkrow['email'];
  }
  else{
    header('Location: ../pages/log_in.php');
  }
}
?>
<html>
<head>
  <link rel="icon" href="../images/icon.png" type="image">
  <title>My Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/account.css">
  <link rel="stylesheet" type="text/css" href="../css/cv.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="../js/jquery-3.1.0.min.js"></script>
</head>
<body>
  <div id="shade" class="animated"></div>
  <div id='shade2' class="animated">
    <div class="w3-card-8 w3-pale-yellow w3-center w3-round">
      <p class='openSans w3-text-dark-grey'>Are you sure that you want to cancel your account? </p>
      <span id='yes'class='w3-btn w3-left w3-green w3-text-light-grey w3-round' onclick='loadDoc();'>Yes</span>
      <span id='no'class='w3-btn w3-right w3-red w3-text-light-grey w3-round'>No</span>
    </div>
  </div>
  <div  id="menu"  class="openSans animated">
    <ul>
      <li class="openSans"><span style="color:#a7c4c5">ME</span><span style="color:#f7941d" >NU</span></li>
      <li><a href='account.php'>My Account</a></li>
      <li><a href='resume.php'>Edit CV</a></li>
      <li><a href="#" onclick='logout();'>Sign Out</a></li>
    </ul>
  </div>
  <ul class='w3-navbar openSans' id='box-shadow'>
    <li id='navIcon'class="icon"><a class="w3-hover-none w3-text-sand w3-xxxlarge" href="javascript:void(0);" onclick="myFunction();">&#9776</a></li>
    <li><a class="w3-hover-none w3-hover-text-blue w3-text-shadow navItem" href='account.php'>My Account</a></li>
    <li><a class="w3-hover-none w3-hover-text-blue w3-text-shadow navItem" href='resume.php'>Edit CV</a></li>
    <li><a class="w3-hover-none w3-hover-text-blue w3-text-shadow navItem" href="#" onclick='logout()'>Sign Out</a></li>
    <a id='logo' href='../index.php'><img src='../images/logo.png'></a>
  </ul>
  <div id='account' class='openSans'>
    <div id='editAccount'>
      <form id='editAccountForm'action='account.php' method='POST'>
        <p class='w3-text-blue-grey w3-border-bottom'><span>Edit Account</span>
          <input type='submit' name='submit1' value='Save Changes' id='submit1'class='w3-right w3-btn w3-round w3-hover-blue w3-text-white w3-teal'>
        </p>
        <div id='error' class='w3-panel w3-border w3-border-red w3-pale-red w3-text-red'></div>
        <div id='success' class='w3-panel w3-border w3-border-green w3-pale-green w3-text-green'></div>
        <label>E-mail address:</label><br><input class='w3-border w3-grey w3-padding-small' type="text" name="email" value="<?php echo $logEmail?>" readonly><br><br>
        <label>Current password<span class="w3-text-red"> * </span>:</label><br>
        <input class='w3-border w3-padding-small' type="password" name="password" ><br><br>
        <label>New password:</label><br>
        <input class='w3-border w3-padding-small' type="password" name="newPassword" ><br><br>
        <label>Confirm new password:</label><br>
        <input class='w3-border w3-padding-small' type="password" name="confirmNewPassword" ><br><br>
        <input type='submit' name='submit2' value='Save Changes'id='submit2' class='w3-btn w3-round w3-hover-blue w3-text-white w3-teal' ><br>
      </form>
      <div class='w3-panel w3-border-top w3-border-bottom w3-text-red w3-padding'>
        <p>Unhappy?<span class='w3-btn w3-right w3-transparent w3-text-grey w3-border w3-border-red w3-round-large w3-padding-small' onclick='cancel();'>Cancel my account</span></p>
      </div>
    </div>
  </div>
  <script src='../js/acc.js'></script>
  <script src="../js/toogle.js"></script>
  <?php
  require("../js/account.js.php");
  require("../js/savecv.js.php");
  require("../js/cancel.js.php");
  ?>
</body>
</html>
