<script type="text/javascript">
var valid= <?php echo $valid;?>;
var supply= <?php echo $supply;?>;
var newEmail= <?php echo $newEmail;?>;
if (supply==1) {
    if (valid==1) {
        if (newEmail==1) {
            window.location='../users/resume.php';
        }else{
            document.getElementById("email").innerHTML ="E-mail Address is Already Registered";
        }
    }else{
        document.getElementById("email").innerHTML = "Password and Confirmation Password don't match.";
    }
}else{
    document.getElementById("email").innerHTML= "You must Enter an E-mail Address, a Password and a Confirmation Password.";
}
</script>
