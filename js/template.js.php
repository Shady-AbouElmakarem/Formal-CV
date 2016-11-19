<script>
var temp;
window.onload=function(){
  $.post('../php/template.php',{email:'<?php echo $logEmail ?>'},function(data){
    if(data==''){
      $('#close').css('display','none');
      $('#template').css('display','block');
    }else{
      $.post('../php/loadcv.php',{email:'<?php echo $logEmail ?>'},function(data){
        $('#textarea').summernote('code', data);
        $.getScript('../js/checksections.js', function() {
        });
      });
      $('#cvForm').css('display','block');
      temp=data;
    }
  });
};
function template(x){
  $('#textarea').summernote('code', '');
  $.getScript('../js/checksections.js', function() {
  });
  $.post('../php/clear.php',{email:'<?php echo $logEmail ?>'});
  $.post('../php/ctemplate.php',{temp:x,email:'<?php echo $logEmail ?>'});
  $('#template').css('display','none');
  $('#cvForm').css('display','block');
  $('#box-shadow').css('box-shadow','2px 2px 2px #888888');
  temp=x;
}
</script>
