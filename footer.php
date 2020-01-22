<footer class = "site__footer waive-container">

    <div class="contact__container"> 
          <div class="social">
            <a href="https://www.linkedin.com/in/maria-zyrianova-40465943/" target = "blank">
              <i class="fab fa-linkedin fa-2x"></i>
            </a>
            <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
              <i class="fab fa-github fa-2x" ></i>
            </a>
            <!-- <i class="fab fa-instagram fa-2x"></i> -->
          </div>
          
          <h1 class = "phone">917.576.7664</h1>
          <a href="mailto:mzyrianova14@gmail.com">
            <h1 class = "footer__heading">mzyrianova14@gmail.com</h1>
          </a>
        
    </div> 
    <svg width="3664"  viewBox="0 0 3664 1185" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2155.5 318.041C2038.04 -296.452 847.926 455.102 0 735.253V1185H1911.69H3664V0C3664 0 2215.5 631.928 2155.5 318.041Z" fill="#00C0F5"/>
    </svg>
     
</footer>
      
    </body>
    <script>
      //open close side nav
        function openNav(){
            document.getElementById("sidenav").style.width="450px";
            //add class nav-open to body
            document.body.classList.add('navopen');
        }
        function closeNav(){
            document.getElementById("sidenav").style.width = "0";
            document.body.classList.remove('navopen');
        }
        document.addEventListener('DOMContentLoaded',function(){
            var button = document.querySelector('.scroll-to-projects');
            button.addEventListener('click', function(){
                document.querySelector('.web').scrollIntoView({ 
                behavior: 'smooth' 
                
              });
        
    });
   
});
    </script>
</html>