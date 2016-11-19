/* = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
= = = = = = = = = = = = = = = = = = = = = = =                 Choose Template                       = = = = = = = = = = = = = = = = = = = = = = =
= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
= = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =*/

function logout(){
  $.post('../php/logout.php',function(){
    window.location="../index.php";
  });
}
$('#ct').click(function(){
  $('#cvForm').css('display','none');
  $('#close').css('display','block');
  $('#template').css('display','block');
});
$('#textarea').summernote({minHeight:410, disableDragAndDrop: true,height:410,maxHeight:window.innerHeig,focus: true,
  toolbar:
  [
    ['misc', ['fullscreen','help']],
    ['fontsize', ['fontsize']],
    ['style', ['fontname']],
    ['para', ['paragraph']],
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough']],
    ['color', ['color']],
    ['insert', ['hr','link']],
    ['para', ['ul', 'ol']]
  ]
});
$(".note-editable").css('padding','0 10%');
$(".note-toolbar").addClass("w3-center");
function pulse(x){
  if(x==1){
    $('#temp1').removeClass('out');
    void $("p").offset();
    $('#temp1').addClass('pulse2');
  }
  if(x==2){
    $('#temp2').removeClass('out');
    void $("p").offset();
    $('#temp2').addClass('pulse2');
  }
  if(x==3){
    $('#temp3').removeClass('out');
    void $("p").offset();
    $('#temp3').addClass('pulse2');
  }
}
function out(x){
  if(x==1){
    $('#temp1').removeClass('pulse2');
    void $("p").offset();
    $('#temp1').addClass('out');
  }
  if(x==2){
    $('#temp2').removeClass('pulse2');
    void $("p").offset();
    $('#temp2').addClass('out');
  }
  if(x==3){
    $('#temp3').removeClass('pulse2');
    void $("p").offset();
    $('#temp3').addClass('out');
  }
}
$('#show1').hover(function(){
  $("#add1").css("visibility", "visible");
},function(){
  $("#add1").css("visibility", "hidden");
});
$('#show2').hover(function(){
  $("#add2").css("visibility", "visible");
},function(){
  $("#add2").css("visibility", "hidden");
});
$('#show3').hover(function(){
  $("#add3").css("visibility", "visible");
},function(){
  $("#add3").css("visibility", "hidden");
});
$('#show4').hover(function(){
  $("#add4").css("visibility", "visible");
},function(){
  $("#add4").css("visibility", "hidden");
});
$('#show5').hover(function(){
  $("#add5").css("visibility", "visible");
},function(){
  $("#add5").css("visibility", "hidden");
});
$('#show6').hover(function(){
  $("#add6").css("visibility", "visible");
},function(){
  $("#add6").css("visibility", "hidden");
});
$('#show7').hover(function(){
  $("#add7").css("visibility", "visible");
},function(){
  $("#add7").css("visibility", "hidden");
});
$('#show8').hover(function(){
  $("#add8").css("visibility", "visible");
},function(){
  $("#add8").css("visibility", "hidden");
});
$('#close').click(function(){
  $('#cvForm').css('display','block');
  $('#template').css('display','none');
});
