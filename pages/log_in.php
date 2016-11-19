<?php
$ip=$_SERVER['REMOTE_ADDR'];
require("../php/connect.inc.php");
$checklog = "SELECT `email` FROM `users` WHERE `ip` = '$ip'";
$checklog_run=mysqli_query($con,$checklog);
$checklog_run_rows=mysqli_num_rows($checklog_run);
if($checklog_run_rows!==0){
header('Location: ../users/resume.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <link rel="icon" href="../images/icon.png" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1, height=700px">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/log_in.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/w3.css">
    <link rel="stylesheet" type="text/css" href="../fonts/fonts.css">
    <script src="../js/jquery-3.1.0.min.js"></script>
</head>
<body>
    <div id="shade" class="animated"></div>
    <div  id="menu"  class="openSans animated">
        <ul>
            <li class="openSans"><span style="color:#a7c4c5">ME</span><span style="color:#f7941d" >NU</span></li>
            <li><a href="sign_up.php">Create Resume</a></li>
            <li><a href="log_in.php">Log In</a></li>
        </ul>
    </div>
    <section id="firstSection">
        <ul id="myTopnav" class="topnav w3-navbar w3-left w3-xlarge openSans">
            <li class="icon"><a id="navIcon" class="w3-hover-none w3-text-light-grey" href="javascript:void(0);" onclick="myFunction();">&#9776</a></li>
            <li><a class="w3-hover-none w3-hover-text-light-grey" href="sign_up.php"><span>Create Resume</span></a></li>
            <li><a class="w3-hover-none w3-hover-text-light-grey" href="log_in.php"><span>Log In</span></a></li>
        </ul>
        <a href="../index.php"><img id="logo" src="../images/logo.png"></a>
        <div id="login" class="w3-center openSans">
            <a href="log_in.php" class="w3-btn w3-text-white w3-cyan w3-hover-blue w3-padding-large w3-xlarge">Log In</a>
            <a href="sign_up.php" class="w3-btn w3-blue-grey w3-text-pale-blue w3-hover-blue w3-text-hover-white w3-padding-large w3-xlarge">Sign Up</a>
            <div style="padding: 5% 0; clear: both;">
                <form action="log_in.php" method="post">
                    <label id="email" class="w3-text-red w3-left w3-input" style="border: none;"></label>
                    <input type="text" name="email" placeholder="E-mail" class="email w3-input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{1,4}">
                    <input type="password" name="password" placeholder="Password" class="email w3-input">
                    <input type="submit" name="login" value="Log In &#187" class="w3-btn w3-center w3-cyan w3-hover-blue w3-text-white w3-padding-large w3-xlarge w3-round" style="width: 40%;">
                </form>
                <div></div>
                <div></div>
            </div>
        </div>
    </section>
    <script src="../js/sidebar.js"></script>
    <?php
    require('../php/login.inc.php');
    ?>
</body>
</html>
