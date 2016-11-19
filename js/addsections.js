$('#add1').click(function(){
  if($(".personal").length === 0) {
    $.post('../php/addsection.php',{section:'personal',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".personal").attr('data-order',$('#show1').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);

    });
    $('#show1').attr('style','color:#F44336!important');
    $('#add1').attr('style','color:#F44336!important;visibility:visible;');
    $("#add1").html('remove_circle_outline');
    $("#show1").hover(
      function(){
      $('#show1').attr('style','color:#F44336!important');
      $('#add1').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show1').attr('style','color:#F44336!important');
      $('#add1').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.personal').remove();
    $('#show1').attr('style','color:#3a3a3a!important');
    $('#add1').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add1").html('add_circle_outline');
    $("#show1").hover(
      function(){
      $('#show1').attr('style','color:#2196F3!important');
      $('#add1').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show1').attr('style','color:#3a3a3a!important');
      $('#add1').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add2').click(function(){
  if($(".summary").length === 0) {
    $.post('../php/addsection.php',{section:'summary',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".summary").attr('data-order',$('#show2').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show2').attr('style','color:#F44336!important');
    $('#add2').attr('style','color:#F44336!important;visibility:visible;');
    $("#add2").html('remove_circle_outline');
    $("#show2").hover(
      function(){
      $('#show2').attr('style','color:#F44336!important');
      $('#add2').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show2').attr('style','color:#F44336!important');
      $('#add2').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.summary').remove();
    $('#show2').attr('style','color:#3a3a3a!important');
    $('#add2').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add2").html('add_circle_outline');
    $("#show2").hover(
      function(){
      $('#show2').attr('style','color:#2196F3!important');
      $('#add2').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show2').attr('style','color:#3a3a3a!important');
      $('#add2').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add3').click(function(){
  if($(".experience").length === 0) {
    $.post('../php/addsection.php',{section:'experience',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".experience").attr('data-order',$('#show3').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show3').attr('style','color:#F44336!important');
    $('#add3').attr('style','color:#F44336!important;visibility:visible;');
    $("#add3").html('remove_circle_outline');
    $("#show3").hover(
      function(){
      $('#show3').attr('style','color:#F44336!important');
      $('#add3').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show3').attr('style','color:#F44336!important');
      $('#add3').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.experience').remove();
    $('#show3').attr('style','color:#3a3a3a!important');
    $('#add3').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add3").html('add_circle_outline');
    $("#show3").hover(
      function(){
      $('#show3').attr('style','color:#2196F3!important');
      $('#add3').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show3').attr('style','color:#3a3a3a!important');
      $('#add3').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add4').click(function(){
  if($(".education").length === 0) {
    $.post('../php/addsection.php',{section:'education',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".education").attr('data-order',$('#show4').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show4').attr('style','color:#F44336!important');
    $('#add4').attr('style','color:#F44336!important;visibility:visible;');
    $("#add4").html('remove_circle_outline');
    $("#show4").hover(
      function(){
      $('#show4').attr('style','color:#F44336!important');
      $('#add4').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show4').attr('style','color:#F44336!important');
      $('#add4').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.education').remove();
    $('#show4').attr('style','color:#3a3a3a!important');
    $('#add4').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add4").html('add_circle_outline');
    $("#show4").hover(
      function(){
      $('#show4').attr('style','color:#2196F3!important');
      $('#add4').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show4').attr('style','color:#3a3a3a!important');
      $('#add4').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add5').click(function(){
  if($(".skills").length === 0) {
    $.post('../php/addsection.php',{section:'skills',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".skills").attr('data-order',$('#show5').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show5').attr('style','color:#F44336!important');
    $('#add5').attr('style','color:#F44336!important;visibility:visible;');
    $("#add5").html('remove_circle_outline');
    $("#show5").hover(
      function(){
      $('#show5').attr('style','color:#F44336!important');
      $('#add5').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show5').attr('style','color:#F44336!important');
      $('#add5').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.skills').remove();
    $('#show5').attr('style','color:#3a3a3a!important');
    $('#add5').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add5").html('add_circle_outline');
    $("#show5").hover(
      function(){
      $('#show5').attr('style','color:#2196F3!important');
      $('#add5').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show5').attr('style','color:#3a3a3a!important');
      $('#add5').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add6').click(function(){
  if($(".activity").length === 0) {
    $.post('../php/addsection.php',{section:'activity',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".activity").attr('data-order',$('#show6').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show6').attr('style','color:#F44336!important');
    $('#add6').attr('style','color:#F44336!important;visibility:visible;');
    $("#add6").html('remove_circle_outline');
    $("#show6").hover(
      function(){
      $('#show6').attr('style','color:#F44336!important');
      $('#add6').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show6').attr('style','color:#F44336!important');
      $('#add6').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.activity').remove();
    $('#show6').attr('style','color:#3a3a3a!important');
    $('#add6').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add6").html('add_circle_outline');
    $("#show6").hover(
      function(){
      $('#show6').attr('style','color:#2196F3!important');
      $('#add6').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show6').attr('style','color:#3a3a3a!important');
      $('#add6').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add7').click(function(){
  if($(".lang").length === 0) {
    $.post('../php/addsection.php',{section:'lang',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".lang").attr('data-order',$('#show7').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show7').attr('style','color:#F44336!important');
    $('#add7').attr('style','color:#F44336!important;visibility:visible;');
    $("#add7").html('remove_circle_outline');
    $("#show7").hover(
      function(){
      $('#show7').attr('style','color:#F44336!important');
      $('#add7').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show7').attr('style','color:#F44336!important');
      $('#add7').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.lang').remove();
    $('#show7').attr('style','color:#3a3a3a!important');
    $('#add7').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add7").html('add_circle_outline');
    $("#show7").hover(
      function(){
      $('#show7').attr('style','color:#2196F3!important');
      $('#add7').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show7').attr('style','color:#3a3a3a!important');
      $('#add7').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add8').click(function(){
  if($(".new").length === 0) {
    $.post('../php/addsection.php',{section:'new',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".new").attr('data-order',$('#show8').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show8').attr('style','color:#F44336!important');
    $('#add8').attr('style','color:#F44336!important;visibility:visible;');
    $("#add8").html('remove_circle_outline');
    $("#show8").hover(
      function(){
      $('#show8').attr('style','color:#F44336!important');
      $('#add8').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show8').attr('style','color:#F44336!important');
      $('#add8').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.new').remove();
    $('#show8').attr('style','color:#3a3a3a!important');
    $('#add8').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add8").html('add_circle_outline');
    $("#show8").hover(
      function(){
      $('#show8').attr('style','color:#2196F3!important');
      $('#add8').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show8').attr('style','color:#3a3a3a!important');
      $('#add8').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
$('#add9').click(function(){
  if($(".new2").length === 0) {
    $.post('../php/addsection.php',{section:'new2',temp:temp},function(data){
      $('#textarea').summernote('code', $('#textarea').summernote('code')+data);
      $(".new2").attr('data-order',$('#show9').index());
      var divList = $(".sort");
      divList.sort(function(a, b){ return $(a).data("order")-$(b).data("order");});
      $(".note-editable").html(divList);
    });
    $('#show9').attr('style','color:#F44336!important');
    $('#add9').attr('style','color:#F44336!important;visibility:visible;');
    $("#add9").html('remove_circle_outline');
    $("#show9").hover(
      function(){
      $('#show9').attr('style','color:#F44336!important');
      $('#add9').attr('style','color:#F44336!important;visibility:visible;');
    },function(){
      $('#show9').attr('style','color:#F44336!important');
      $('#add9').attr('style','color:#F44336!important;visibility:visible;');
    });
  }
  else{
    $('.new2').remove();
    $('#show9').attr('style','color:#3a3a3a!important');
    $('#add9').attr('style','color:#3a3a3a!important;visibility:hidden;');
    $("#add9").html('add_circle_outline');
    $("#show9").hover(
      function(){
      $('#show9').attr('style','color:#2196F3!important');
      $('#add9').attr('style','color:#2196F3!important;visibility:visible;');
    },function(){
      $('#show9').attr('style','color:#3a3a3a!important');
      $('#add9').attr('style','color:#3a3a3a!important;visibility:hidden;');
    });
  }
});
