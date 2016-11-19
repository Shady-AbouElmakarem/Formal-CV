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
  <title>My Resume</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/account.css">
  <link rel="stylesheet" type="text/css" href="../css/cv.css">
  <link rel="stylesheet" type="text/css" href="../css/animate.css">
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <script src="../js/jquery-3.1.0.min.js"></script>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
  <script src='../js/jquery.simulate.js'></script>
  <script src='../js/jquery.sortable.min.js'></script>
  <?php require("../js/template.js.php");?>
</head>
<body>
  <div id="shade" class="animated"></div>
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
  <div id='cv' class='openSans'>
    <div id='template'>
      <div class='w3-card-12 w3-center w3-round-large w3-teal'>
        <span id='close'style="margin-top:-10px;margin-right:20px;float:right;"class="w3-xlarge w3-hover-text-Orange fa fa-close"></span>
        <p class='w3-card-12 w3-round-xlarge w3-text-shadow w3-text-light-grey'>CHOOSE A TEMPLATE</p>
        <div>
          <img id='temp1' class='w3-card-16' src='../images/temp1.png' onmouseover='pulse(1);' onmouseout='out(1);' onclick='template(1);'>
          <img id='temp2' class='w3-card-16' src='../images/temp2.png' onmouseover='pulse(2);' onmouseout='out(2);' onclick='template(2);'>
          <img id='temp3' class='w3-card-16' src='../images/temp3.png' onmouseover='pulse(3);' onmouseout='out(3);' onclick='template(3);'>
        </div>
      </div>
    </div>
    <form id='cvForm' method='post'>
      <ul id='cpanel' class="sortable example w3-ul w3-card-4 w3-hoverable">
        <li class="disabled w3-padding w3-teal w3-center"><h4>Add sections to your resume</h2></li>
          <li id='show1' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add1'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>Personal Details</li>
          <li id='show2' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add2'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>Summary</li>
          <li id='show3' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add3'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>Work Experience</li>
          <li id='show4' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add4'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>Education</li>
          <li id='show5' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add5'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>Skills</li>
          <li id='show6' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add6'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>Extracurricular Activities</li>
          <li id='show7' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add7'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>Languages</li>
          <li id='show8' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add8'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>custom section 1</li>
          <li id='show9' data-list-order='10' class="w3-text-dark-grey w3-hover-text-blue w3-hover-none w3-padding-large strong"><i id='add9'class="w3-right material-icons w3-text-blue add">add_circle_outline</i>custom section 2</li>
        </ul>
        <div id='editcv' class="w3-right">
          <textarea id='textarea'></textarea>
        </div>
        <div id='saveAndDownload'class="w3-center">
          <div id='ct'class="w3-btn w3-round w3-teal w3-hover-blue w3-large">Start New Resume</div>
          <div id='download' class="w3-btn w3-round w3-red w3-hover-blue w3-large">Download PDF</div>
          <div id='download3' class="w3-btn w3-round w3-red w3-hover-blue w3-large">Save my changes</div>
          <a id='download2' href='../php/<?php echo $logEmail?>.pdf'download style="display:none"></a>
        </div>
      </form>
    </div>
    <script src='../js/cv.js'></script>
    <script src='../js/addsections.js'></script>
    <script src="../js/toogle.js"></script>
    <?php
    require("../js/account.js.php");
    require("../js/savecv.js.php");
    require("../js/cancel.js.php");
    ?>
  </body>
  </html>
