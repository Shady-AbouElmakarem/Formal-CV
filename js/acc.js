function logout(){
  $.post('../php/logout.php',function(){
    window.location="../index.php";
  });
}
