<!DOCTYPTE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <?php wp_head()?>
       
        <script src="https://kit.fontawesome.com/1ec81f68fa.js"></script>
        <title>Masha Zyryanova</title>    
    </head>
    <body <?php body_class('site'); ?>>
      <header class="site__header header sticky" >
		  
		  
        <div class="header_desktop header__content narrow content" >
            <div class="logo header__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              			<h1 class = "logo__text">MYZ</h1>
				</a>
            </div>
            <nav class="header__nav nav">
              
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
            	 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              			<h1 class = "logo__text">MYZ</h1>
				</a>
          </div>
          <div class="mobile__menu mmm">
              <a class="menu-toggle">
                <i  class="fas fa-bars fa-2x"></i>
              </a>
          </div>
          <!-- side nav -->
        </div>
        <!-- End Mobile Header  -->
      </header> 
      <!-- End Header -->
		
		
      <div id="sidenav" class="sidenav">
          <a href="javascript:void(0)"  class="closebtn">&times;</a>
        
          <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
            GITHUB
          </a>
          <a href="/portfolio-new/">WORK</a>
          <a class="mobile__link" href="/#skills">SKILLS</a>
          <a class="mobile__link" href="/#contact">CONTACT</a>
          <a class="mobile__link" href="/#about">ABOUT</a>
      </div>
      <div id="overlay__sidenav"></div>

    