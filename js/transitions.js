const swup = new Swup();


const cursor = document.querySelector('.cursor');
document.addEventListener('mousemove', function(e) {
    cursor.setAttribute("style","top:" + (e.pageY-10)+ "px; left: "+ (e.pageX-10) + "px;")
})
