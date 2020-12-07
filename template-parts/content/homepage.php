<?php get_header(); ?>
<!-- <div class="cursor"></div> -->
<!-- Main content
=========================================================== -->
<main id="swup" class="transition-fade">
  <section class="intro"> 
    <video  id="intro__video" autoplay loop muted >
      <!-- <source src="/wp-content/themes/PersonalWebsiteWordpress/assets/images/BG_FULL_MOVIE.mov"> -->
      <source src="<?php echo get_theme_file_uri('assets/images/BG_FULL_MOVIE.mov'); ?>">
    </video>
    <div class="intro__col">
      <p >Hello. I am a full stack developer living
        in Los Angeles. I strive to write a clean, modular and reusable code.</p>
    </div>
    <h1 id="intro__text">Masha Zyryanova</h1>
    <button class="arrow-wrapper scroll-to-projects">
      <div class="line"></div>
      <p><i class="arrow"></i></p>
    </button>
      <div class="section2"></div>
      <div class="overlay"></div>  
  </section>
  <!-- End Intro -->

  <section class="web section__bg--white" id="work">
    <div class="section__text">
      <h1 class="heading__new"> Websites<span class="dot dot--blue"></span></h1>
      <h2 class="subheading subheading--blue">E-commerce &nbsp;<span style="color:black">/</span> &nbsp;landing pages</h2>
      <a class="explore explore--dark" href="/portfolio-new/">more work</a>
    </div>
    <div class="content--web">
      <div class="project--web project--web__two" >  
        <div class="project__image">
          <a href="/vivid-fashion/">
						 <!-- <img class="responsive" width="600px;" height="auto" src="/wp-content/uploads/2020/06/vividFashion.png"  alt="Vivid Fashion"/> -->
             <img class="responsive" width="600px;" height="auto" src="<?php echo get_theme_file_uri('assets/images/vividFashion.png'); ?>">
            </a>
        </div>
      </div>
      <div class=" project--web project--web__three" >  
        <div class="project__image">
          <a href="/web2/">
						<!-- <img class="responsive" width="600px;" height="auto" src="/wp-content/uploads/2020/06/Component-1.png"  alt="Map"/> -->
            <img class="responsive" width="600px;" height="auto" src="<?php echo get_theme_file_uri('assets/images/Component-1.png'); ?>">
          </a>
        </div> 
      </div>
      <div class=" project--web project--web__one" >  	
        <div class="project__image">
          <a href="/web1/">
					  <img class="responsive" width="600px;" height="auto" src="/wp-content/uploads/2020/06/Charity_home.png"  alt="Charity"/>
          </a>
        </div>
      </div>
    </div>   
  </section>
  <!-- End Web section --> 


  <section class="section react section__bg--blue">
  <div class="section__text section__text-react">
      <h1 class="heading__new">React<span class="dot dot--white"></span></h1>
      <h1 class="subheading subheading--white">REACT.js application&nbsp;<span style="color:black">/</span> &nbsp;News Update 2020</h1>
     
      <a class="explore explore--white " href="/category/react/">explore</a>
  </div>   

  <div class="content--react content" >  
    <div class="react__container" id="react-1" >
         
          <div class="project__image">
              <a href="/category/react/">
                <img src="/wp-content/uploads/2020/06/2020-01-12-1.png" class="responsive" width="600" height="auto" alt="News Update"  />
              </a>
          </div>
    </div>      
    <div class="react__container" id="react-2">
        
          <div class="project__image">
              <a href="/category/react/">
                <img src="/wp-content/uploads/2020/06/2020-01-12.png" class="responsive" width="600" height="auto" alt="News Update"  />
              </a>
          </div>
    </div>     
  </div>        
  </section>
  <!-- End React section --> 


  <div class=" waive waive--white waive--white__react">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L60,240C120,224,240,192,360,202.7C480,213,600,267,720,250.7C840,235,960,149,1080,128C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
  </div>

  <section class="section games section__bg--white">
  <div class="section__text">
    <h1 class="heading__new">Games<span class="dot dot--blue"></span></h1>
    <h1 class="subheading subheading--blue">SuperPose&nbsp;<span style="color:black">/</span> &nbsp;Puzzles</h1>
    <a class="explore explore--dark" id="explore-summerize" href="/superpose">explore SuperPose</a><br>
    <a class="explore explore--dark" href="https://nrostova.github.io/puzzle/" target="_blank">explore Puzzles</a>
  </div>
  <div class="content--games content">
    <div class="project" >  
      <div class="project__container" >
            <p class ="project__heading">SuperPose Caltech Hacktech</p>			
            <div class="project__image">
                <a href="https://devpost.com/software/superpose" target="blank">
                  <img class="responsive" width="600" height="auto" src="/wp-content/uploads/2020/06/superpose-1.gif"  alt="Superpose gif"  />
              </a>
            </div>
      </div>
      <div class="project__description">
        <div class="remote">
          
          <p class="built__with">built with <p>
          <p class="project__text">Beautiful Soup <p>
          <p class="project__text">Bootstrap <p>
          <p class="project__text">eBay API <p>
          <p class="project__text">Flask <p>
          <p class="project__text">OpenPose<p>
          <p class="project__text">TensorFlow<p>
        </div> 
        <div class="button__wrapper">
          <button class="button__content--skills button">
            <a class ="button__link" href="https://devpost.com/software/superpose" target="blank">
              explore<br> SuperPose
            </a> 
          </button> 
        </div>
      </div> 
     
    </div>
    <!-- End Project 4 SuperPose-->
    <div class="project" id="rd" style="margin-top:50px;">  
      <div class="project__container" >
            <p class ="project__heading">Online Puzzles</p>			
            <div class="project__image">
                <a href="/latest-work/" target="blank">
                  <img class="responsive" width="600" height="auto" src="/wp-content/uploads/2020/06/PuzzleImage.jpg"  alt="Car puzzle"  />
              </a>
            </div>
      </div>
      <div class="project__description">
        <div class="remote">
          
          <p class="built__with">built with <p>
          <p class="project__text">Javascript <p>
          <p class="project__text">Firebase API<p>
          <p class="project__text">Canvas<p>
        
        </div> 
       
        <div class="button__wrapper">
          <button class="button__content--skills button">
            <a class ="button__link" href="https://nrostova.github.io/puzzle/" target="blank">
            explore <br>Puzzle Game
            </a>
            
          </button> 
        </div>
      </div> 
      
        
    </div>
    <!-- End Project 5 Puzzles -->
  </div>
</section>
<!-- End Games Sections -->


<section class="section winners section__bg--blue">
  <div class="section__text section__text--winners">
    <h1 class="heading__new">Awards<span class="dot dot--white"></span></h1>
    <h2 class="subheading subheading--white">Hackathons&nbsp;<span style="color:black">/</span> &nbsp;competitions</h2>
    <a class="explore explore--white" id="explore-summerize" href="/summerize/">explore summerize</a><br>
    <a class="explore explore--white" href="/aiimee/">explore AImEe</a>
  </div>
    
  <div class="content--winner__projects content">
     
        <div class="winner__container" id="winner-1" >
            <p class ="project__heading">AImEe. Winner at FireDrone.AI 2019</p>
            <div class="project__image">
              <a href="https://devpost.com/software/aimmi" target="blank">
                <img class="responsive" width="600" height="auto" src="/wp-content/uploads/2020/06/Aimee_home.png"  alt="AImEe home"  />
              </a>
            </div>
        </div>
  
      
        <!-- End Project 2 Firedrone--> 
    
    <div class="winner__container" id="winner-2">
      <p class ="project__heading">Summerize Winner at MLH Local Hack Day 2018</p>		
      <div class="image__container">
        <a href="https://devpost.com/software/Summerize" target="blank">
          <img class="responsive" width="600" height="auto" src="/wp-content/uploads/2020/06/Summerize.gif"  alt="gif"  />
        </a>
      </div> 
    </div>
    
      <!-- End Project 3  Summerize-->
    
  </div>        
</section>
<!-- End Winner Projects -->

<div class="waive waive--python">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L60,240C120,224,240,192,360,202.7C480,213,600,267,720,250.7C840,235,960,149,1080,128C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
</div>

<section class="section python section__bg--white" >

  <div class="section__text">
        <h1 class="heading__new"> Python<span class="dot dot--blue"></span></h1>
        <h2 class="subheading subheading--blue">Research&nbsp;<span style="color:black">/</span> &nbsp;Visualizations&nbsp;<span style="color:black">/</span>&nbsp;DYNAMICS OF VORTEX RINGS</h2>
        <a class="explore explore--dark" href="/category/python/">explore</a>
  </div>

  <div class="content--python">
    <div class="python__container">
      <img src="/wp-content/uploads/2020/06/Frame105_HSV_3dplot-1.png" alt="3d plot HSV Color space">
    </div>
   
    <div class="python__container">
      <img src="wp-content/uploads/2020/06/Frame105_RGB_3dplot.png" alt="sd plot RGB color space">
    </div>
    <div id="about"></div>
  </div>

</section>
<!-- End Python -->

<section class="site__about section__bg--blue about" >
	<div class="about__desktop about__wrapper" >
    <canvas></canvas>
		<div class="about__textWrapper shadow"">
		  <p class="about__text">Hello! My name is <span class="yellow">Masha</span>. I am a <span class="yellow">full stack developer</span> living
			in Los Angeles. My biggest inspiration is nature. Whether I am looking for a prefect color scheme to design a website,
			or imagining an engineering device, I often discover solutions by looking at the world around me.
			In terms of coding, I strive to write a clean modular reusable code.
			 One of my favorite things is to participate and compete in hackathons. I love working 
			in a team environment while building something awesome on a tight deadline.
		  </p>
    </div>
    <button id="stopSnow">Toggle Snow</button>
  </div>
	<div class="about__mobile about__wrapper" >
		<div class="about__textWrapper shadow"">
		  <p class="about__text">Hello! My name is <span class="yellow">Masha</span>. I am a <span class="yellow">full stack developer</span> living
			in Los Angeles. My biggest inspiration is nature. Whether I am looking for a prefect color scheme to design a website,
			or imagining an engineering device, I often discover solutions by looking at the world around me.
			In terms of coding, I strive to write a clean modular reusable code.
			 One of my favorite things is to participate and compete in hackathons. I love working 
			in a team environment while building something awesome on a tight deadline.
		  </p>
    </div>
  </div>
</section> 
<!-- End About -->


<section class="section skills bg_white" id="skills">
    
      <div class="content--skills content" >
        <div class="content--skills__container">
          <h2 class = "content--skills__heading">Languages and Workflow</h2>
          <p>C</p>
          <p>C++</p>
          <p>Python</p>
          <p>JavaScript</p>
          <p>PHP</p>
          <p>R</p>
          <p>GIT, GITLAB VCS</p>
        </div>
        <div class="content--skills__container">
          <h2 class = "content--skills__heading">Client Side Technologies</h2>
          <p>HTML5</p>
          <p>CSS3, SASS</p>
          <p>React.js, Redux</p>
		      <p>Vue, Vuex</p>
          <p>Nunjucks</p>
           <p>Jinja</p>
          <p>Figma</p>
          
        </div>
        <div class="content--skills__container">
          <h2 class = "content--skills__heading">Server Side Technologies<br>Libraries</h2>
        <p>Flask</p>
          <p>Tensorflow</p>
          <p>CV2</p>
          <p>NODE.js, Express</p>
          <p>MySQL, SQLlite</p>
          <p>Cloud</p>
          <p>AZURE ML</p>
        </div>
      </div>
</section>
<!-- End Skills Section -->
</main>
 <?php get_footer(); ?>