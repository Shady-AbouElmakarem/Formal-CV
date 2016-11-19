<script type="text/javascript">
var valid = <?php echo $valid;?>;
var supply= <?php echo $supply;?>;
if (supply===1) {
    if (valid===0) {
        document.getElementById("email").innerHTML = "Invalid E-mail Address / Password combination";
    }else{
        window.location="../users/resume.php";
    }
}else{
    document.getElementById("email").innerHTML = "You must Enter an E-mail Address and a Password";
}
</script>
