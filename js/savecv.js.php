<script>

$('#download').click(function(){
  var cv = $('#textarea').summernote('code');
  $.post('../php/save.php',{cv:cv,email:'<?php echo $logEmail?>'},function(){
    $('#download2').simulate('click');
  });

})
$('#download3').click(function(){
  var scv = $('#textarea').summernote('code');
  $.post('../php/save.php',{cv:scv,email:'<?php echo $logEmail?>'},function(){
  });
})
</script>
