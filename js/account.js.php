<?php
if (isset($_POST['password'])&&isset($_POST['newPassword'])&&isset($_POST['confirmNewPassword'])){
    $password=$_POST['password'];
    $password_hash=md5($password);
    $newPassword=$_POST['newPassword'];
    $confirmNewPassword=$_POST['confirmNewPassword'];
    $newPassword_hash=md5($newPassword);
    if(!empty($password)&&!empty($newPassword)&&!empty($confirmNewPassword)){
        $supply=1;
        if($newPassword==$confirmNewPassword){
            $valid=1;
            $query = "SELECT `id` FROM `users` WHERE `email` = '$logEmail' AND `password` = '$password_hash'";
            $query_run=mysqli_query($con,$query);
            $query_run_rows=mysqli_num_rows($query_run);
            if($query_run_rows==0){
                $valid2=0;
            }else{
                $valid2=1;
                $update= "UPDATE users SET password='$newPassword_hash' WHERE email='$logEmail'";
                $update_run=mysqli_query($con,$update);
            }
        }else{
            $valid=0;
            $valid2=0;
        }
    }else{
        $supply=0;
        $valid=0;
        $valid2=0;
    }
}
?>
<script>
var supply= <?php echo $supply;?>;
var valid = <?php echo $valid;?>;
var valid2 = <?php echo $valid2;?>;
var logEmail="<?php echo $logEmail;?>";
var error = document.getElementById('error');
var success = document.getElementById("success");
if (supply===1) {
    if(valid===1){
        if(valid2===1){
            success.style.display='block';
            success.style.textAlign = "center";
            success.innerHTML = 'Changes have been saved successfully';
        }else{
            error.style.display='block';
            error.style.textAlign = "center";
            error.innerHTML = 'Invalid current password';
        }
    }else{
        error.style.display='block';
        error.style.textAlign = "center";
        error.innerHTML = 'New password and confirmation password must be the same';
    }
}else if(supply===0){
    error.style.display='block';
    error.style.textAlign = "center";
    error.innerHTML = "You must Enter the current password, a new password and confirm the new password";
}
</script>
