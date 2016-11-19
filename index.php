<!DOCTYPE HTML>
<html>
<head>
    <title>Formal CV</title>
    <link rel="icon" href="images/icon.png" type="image">
    <meta name="viewport" content="width=device-width, initial-scale=1, height=700px">
    <meta name="description" content="Resume builder">
    <meta name="author" content="Shady Abou Elmakarem">
    <meta name="keywords" content="cv, resume">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js"></script>
</head>
<body>
    <div id="shade" class="animated"></div>
    <div  id="menu"  class="openSans animated">
        <ul>
            <li class="openSans"><span style="color:#a7c4c5">ME</span><span style="color:#f7941d" >NU</span></li>
            <li><a href="pages/sign_up.php">Create Resume</a></li>
            <li><a href="pages/log_in.php">Log In</a></li>
        </ul>
    </div>
    <section id="firstSection">
        <ul id="myTopnav" class="topnav w3-navbar w3-left w3-xlarge openSans">
            <li class="icon"><a id="navIcon" class="w3-hover-none w3-text-light-grey" href="javascript:void(0);" onclick="myFunction();">&#9776</a></li>
            <li><a class="w3-hover-none w3-hover-text-light-grey" href="pages/sign_up.php"><span>Create Resume</span></a></li>
            <li><a class="w3-hover-none w3-hover-text-light-grey" href="pages/log_in.php"><span>Log In</span></a></li>
        </ul>
        <a href="index.php"><img id="logo" src="images/logo.png"></a>
        <div id="firstP" class="w3-center">
            <p class="w3-text-sand openSans w3-jumbo" >Build your resume and download it right now!<br><span class="w3-xlarge">No Payments. No Ads</span></p>
        </div>
        <div id="getStarted" class="w3-center">
            <a class="w3-btn w3-cyan w3-hover-blue w3-xlarge w3-round w3-text-white openSans" href="pages/sign_up.php">Get Started &#187</a>
        </div>
        <a href='#secondSection'id='cart' class="w3-display-bottommiddle material-icons w3-text-light-blue w3-jumbo ">&#xe313</a>
    </section>
    <section id="secondSection" class="w3-xlarge w3-white w3-center openSans">
        <div id="try" class="w3-center">
            <p class="w3-text-grey" style="padding: 0% 10%;"><span class="w3-xxlarge w3-text-dark-grey" style="font-weight: bold;">How does it work?<br><br>
            </span>Just type and save a copy like you would while using any word processor.<br>
            It's fully customizable, you can add, edit and arrange multiple sections or even make your own sections.</p>
            <a href='pages/sign_up.php' class="w3-btn w3-cyan w3-hover-blue w3-round w3-text-white" style="margin-top: 5%;">Try it now!</a>
        </div>
        <ul id="services" class="w3-center w3-ul w3-navbar w3-text-grey w3-large">
            <li>
                <img src="images/pdf.png">
                <p class="w3-right">To download your resume, choose a template, edit it and download the resume for free.
                </p>
            </li>
            <li>
                <img src="images/drive.png">
                <p class="w3-right">FormalCV saves an editable copy of your resume on the server, giving you easy access to your editable resume on all devices - mobile, tablet and PC.
                </p>
            </li>
            <li>
                <img src="images/writing.png">
                <p class="w3-right">If you need help writing your resume, <a href="pages/sign_up.php" class="w3-text-cyan w3-hover-text-pink
                    w3-hover-none" style="padding: 0; display: inline;">Sign Up</a> and contact me. I will help you complete your resume.
                </p>
            </li>
        </ul>
        <ul id="features" class="w3-ul w3-navbar w3-text-grey w3-large">
            <li><span class='feature'>Privacy</span><br>I do not share your data with anybody without your permission. No spam either.</li>
            <li><span class="feature">No networking</span><br>Since FormalCV is not a network, you will never receive a single email about people you might want to connect with.</li>
            <li style="border: none!important"><span class="feature">Reach Me</span><br>If you have any feedback, please email me on <span class="w3-text-blue">ShadyAbouElmakarem@gmail.com</span></li>
        </ul>
        <footer class="w3-text-grey">
            <p>Built from scratch by &nbsp<a target="_blank" href='https://www.facebook.com/shadyabouelmakarem'class='w3-text-blue-grey'style='border:none;padding:0;'>Shady Abou Elmakarem</a><p>&nbsp10/2016</p></p>
            <hr>
            <a href="pages/log_in.php" class="w3-hover-text-light-grey">Log In</a>
            <a href="pages/sign_up.php" class="w3-hover-text-light-grey">Create Resume</a>
        </footer>
    </section>
    <script src="js/sidebar.js"></script>
    <script src="js/smooth.js"></script>
</body>
</html>
