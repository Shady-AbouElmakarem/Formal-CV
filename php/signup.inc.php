<?php
    if (isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['confirmPassword'])){
        $email =$_POST['email'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        $password_hash=md5($password);
        $ip=$_SERVER['REMOTE_ADDR'];
        if(!empty($email)&&!empty($password)&&!empty($confirmPassword)){
            $supply=1;
            if($password==$confirmPassword){
                $valid=1;
                $query2="SELECT `id` FROM `users` WHERE `email` = '$email'";
                $query_run2=mysqli_query($con,$query2);
                $query_run_rows=mysqli_num_rows($query_run2);
                if($query_run_rows==0){
                    $newEmail=1;
                    session_start();
                    $_SESSION[$ip] = $ip;
                    $query = "INSERT INTO `users`(`email`, `password`,`ip`) VALUES ('$email','$password_hash','$ip')";
                    $query_run=mysqli_query($con,$query);
                }else{
                    $newEmail=0;
                }
            }else{
                $valid=0;
                $newEmail=0;
            }
        }else{
            $supply=0;
            $valid=0;
            $newEmail=0;
        }
    }
    include('../js/sign_up.js.php');
?>
