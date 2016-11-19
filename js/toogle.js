var menu=document.getElementById("menu");
var shade=document.getElementById("shade");
menu.addEventListener('touchmove', function(e) {

         e.preventDefault();

}, false);
shade.addEventListener('touchmove', function(e) {

        e.preventDefault();

}, false);
function myFunction() {
        menu.classList.remove("slideOutLeft");
        menu.style.display="block";
        menu.classList.add("slideInLeft");
        shade.style.display="block";
        shade.addEventListener("click",function(){
            menu.classList.remove("slideInLeft");
            menu.classList.add("slideOutLeft");
            shade.style.display="none";
        });
}
