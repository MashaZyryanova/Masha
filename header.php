<!DOCTYPTE html>
<html>
    <head>
        <meta charset="UTF-8">
        <?php wp_head()?>
       
        <script src="https://kit.fontawesome.com/1ec81f68fa.js"></script>
        <title>Masha Zyryanova</title>    
    </head>
    <body <?php body_class('site'); ?>>
      <header class="site__header header sticky" >
        <div class="header_desktop header__content content" >
            <div class="logo header__logo">
              <h1 class = "logo__text">MYZ</h1>
            </div>
            <nav class="header__nav nav">
                <!-- <ul class="nav__menu menu">
                    <li class="menu__item">
                        <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
                            github
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#projects" class="menu__link link ">
                            projects
                        </a> 
                        <hr class = "hover-border">
                    </li>
                    <li class="menu__item">
                        <a href="#skills" class="menu__link link">
                            skills
                        </a>
                    </li>
                    <li class="menu__item">
                        <a href="#contact" class="menu__link link">
                            contact
                        </a> 
                    </li>
                    <li class="menu__item">
                        <a href="#about" class="menu__link link">
                            about
                        </a> 
                    </li>   
                </ul> -->
                <?php

                if(has_nav_menu('primary')){
                  wp_nav_menu([
                    'theme_location'  => 'primary',
                    'container'       => 'false',
                    'menu_class'      => 'nav__menu menu',
                    'fallback_cb'     => false,
                    'depth'           => 2
                  ]);
                }
                ?>
            </nav>     
        </div> 
        <div class="header_mobile mobile" >  
          <div class="logo header__logo">
              <h1 class = "logo__text">MYZ</h1>
          </div>
          <div class="mobile__menu">
              <a class="menu-toggle" onclick="openNav()">
                <i  class="fas fa-bars fa-2x"></i>
              </a>
          </div>
          <!-- side nav -->
        </div>
        <!-- End Mobile Header  -->
      </header> 
      <!-- End Header -->
      <div id="sidenav" class="sidenav">
          <a href="javascript:void(0)"
              class="closebtn"
              onclick="closeNav()">&times;</a>
          </a>
          <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
            GITHUB
          </a>
          <a href="#projects">WORK</a>
          <a href="#skills">SKILLS</a>
          <a href="#contact">CONTACT</a>
          <a href="#about">ABOUT</a>
      </div>
      <div id="overlay__sidenav"></div>

    