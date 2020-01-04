<footer id="contact" class = "site__footer">
        <a href="mailto:mzyrianova14@gmail.com">
          <h1 class = "footer__heading">mzyrianova14@gmail.com</h1>
        </a>
        <h1 class = "phone">917.576.7664</h1>
        <div class="social">
          <a href="https://www.linkedin.com/in/maria-zyrianova-40465943/" target = "blank">
            <i class="fab fa-linkedin fa-2x"></i>
          </a>
          <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
            <i class="fab fa-github fa-2x" ></i>
          </a>
         <i class="fab fa-instagram fa-2x"></i>
        </div>
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
    </script>
</html>