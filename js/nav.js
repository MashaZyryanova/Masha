 //open close side nav
 document.querySelector('.menu-toggle').addEventListener('click', function(){
    document.getElementById("sidenav").style.width="450px";
    //add class nav-open to body
    document.body.classList.add('navopen');
 });

 document.querySelector('.closebtn').addEventListener('click', function()
{
    document.getElementById("sidenav").style.width = "0";
    document.body.classList.remove('navopen');
});