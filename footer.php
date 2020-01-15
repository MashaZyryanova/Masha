<footer id="contact" class = "site__footer waive-container">
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

      <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
          <path fill="#00bff3" fill-opacity="1" 
            d="M0,64L26.7,90.7C53.3,117,107,171,160,176C213.3,181,267,139,320,117.3C373.3,96,427,96,480,122.7C533.3,149,587,203,640,192C693.3,181,747,107,800,96C853.3,85,907,139,960,176C1013.3,213,1067,235,1120,224C1173.3,213,1227,171,1280,138.7C1333.3,107,1387,85,1413,74.7L1440,64L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
          </path>
      </svg> -->

      
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00bff3e6" fill-opacity="1" d="M0,256L60,240C120,224,240,192,360,202.7C480,213,600,267,720,250.7C840,235,960,149,1080,128C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>

       
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