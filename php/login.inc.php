<?php
if (isset($_POST['email'])&&isset($_POST['password'])){
    $email =$_POST['email'];
    $password=$_POST['password'];
    $password_hash=md5($password);
    if(!empty($email)&&!empty($password)){
        $supply=1;
        $query = "SELECT `id` FROM `users` WHERE `email` = '$email' AND `password` = '$password_hash'";
        $query_run=mysqli_query($con,$query);
        $query_run_rows=mysqli_num_rows($query_run);
        if($query_run_rows==0){
            $valid=0;
        }else{
            session_start();
            $_SESSION[$ip] = $ip;
            $ipquery= mysqli_query($con,"SELECT `ip` FROM `users` WHERE `email` = '$email'");
            $checkip = mysqli_fetch_array($ipquery);
            $query2 = "UPDATE users SET ip='$ip' WHERE email='$email'";
            $query2_run=mysqli_query($con,$query2);
            $valid=1;
        }
    }else{
        $supply=0;
        $valid=0;
    }
}
include('../js/log_in.js.php');
?>
