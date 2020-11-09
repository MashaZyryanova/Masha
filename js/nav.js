document.addEventListener('DOMContentLoaded', function(){
  document.querySelectorAll('.menu-toggle').forEach(function(button){
	 
	 
	 button.onclick = function()
	 {
    	document.getElementById("sidenav").style.width = "450px";
    	document.body.classList.add('navopen');
	};
	 
	 
 });



 document.querySelector('.closebtn').addEventListener('click', function()
{
    document.getElementById("sidenav").style.width = "0";
    document.body.classList.remove('navopen');
});

 document.querySelectorAll('.mobile__link').forEach(function(link){
	 
	 
	 link.onclick = function()
	 {
    	document.getElementById("sidenav").style.width = "0";
    	document.body.classList.remove('navopen');
	};
	 
	 
 });
 
});