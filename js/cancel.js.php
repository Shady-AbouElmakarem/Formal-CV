<script>
var shade2=document.getElementById("shade2");
shade2.addEventListener('touchmove', function(e) {

         e.preventDefault();

}, false);
function cancel(){
    $('#shade2').css({'display':'block'});
    $('#shade2').addClass("fadeIn");
    $('#no').click(function(){
            $('#shade2').removeClass("fadeIn");
            $('#shade2').css('display','none');
        });
}
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        window.location="../index.php";
    }
  };
  xhttp.open("GET", "../php/cancel_account.php?c="+'<?php echo $logEmail;?>', true);
  xhttp.send();
}
</script>
