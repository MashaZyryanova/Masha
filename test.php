<?php
if(have_posts()){
    while(have_posts()){
        the_post();
        get_template_part('template-parts/content/homepage');
    }
}
else{
     get_template_part('template-parts/content/content','none');

}
?>


<p class="vortex_rings__text">During an Aersopace Mentorship Program at Caltech I have studied dynamics of vortex rings. 
          One of my goals was to determine the velocity of vortex rings
          after they separate from the boundary layer and travel through the air.
          I built 3d plots to visualize color profiles in RGB and HSV color spaces for an individual vortex ring
          then detected vortex ring contours using Python and CV2, 
          collecting coordinates along the way and building the velocity graph.
        </p>
<p id="games__info">
              Superheroes save lives and have superpowers. In our game, groups of friends enjoy competing
               for the best superhero pose and then get inspired to become a superhero in real life. They gain their superpowers by performing small acts of kindness that go a long way.
               Currently, we support gifting a superhero costume or an educational book to kids that need help.
</p>

<p id="web__info">Responsive web pages for fashion and e-commerce websites. Built using HTML5, css3, svg graphics, wordpress.</p>


  <!-- <div class="project__description">
                <div class="remote">
                  <p class="project__text">React
                  Redux</p>
                  <p class="project__text">Hacker News API <p>
                  <p class="project__text">JavaScript<p>
                </div>  
                <button class="button__content--skills button">
                  <a class ="button__link" href="https://newsupdate2020.herokuapp.com/" target="blank">
                    more about News Update
                  </a>
                </button> 
              </div>  -->
              <div class="react__description-mobile">
      <!-- <div class="remote__mobile text_white">
          <p>BUILT WITH REACT REDUX HACKER NEWS API JAVASCRIPT</p>
        </div> -->
        <!-- <button class="about__button">
          <a class ="button__link" href="/" target="blank">
            more about News Update
          </a>
        </button>  -->
    </div>

     <!-- <div class="project__description-mobile">
          <div class="remote__mobile">
              <p class="text__mobile">
              Built with Beautiful Soup, Bootstrap, eBay API, Flask, OpenPose,TensorFlow
              </p>
            </div>  -->
            <!-- <button class="about__button">
              <a class ="button__link" href="/" target="blank">
                explore about SuperPose
              </a>
            </button>  -->
      <!-- </div>   -->
      <div class="project__description-mobile">
          <div class="remote__mobile">
              <p class="text__mobile">
              Built with JavaScript, Firebase API
              </p>
            </div> 
            <!-- <button class="about__button">
              <a class ="button__link" href="/" target="blank">
                more about Russian Doll
              </a>
            </button>  -->
      </div>

      <div class="react__description-mobile">
            <div class="remote__mobile text_white">
                <p>Bulit with Python , Flask, Azure machine learning services,
                  TensorFlow, used inception V3 model.
                </p>
              </div>
              <!-- <button class="about__button">
                <a class ="button__link" href="/" target="blank">
                  more about AImmEe
                </a>
              </button>  -->
        </div>
      <!-- <div class="project__description">
          <div class="remote">
            <div class="topBar"></div>
            <p class="project__text">built with <p>
            <p class="project__text">JavaScript<p>
            <p class="project__text">Express.js<p>
            <p class="project__text">Node.js<p>
            <p class="project__text">React<p>
            <p class="project__text">azure cognitive services api<p>
          </div>  
          
          <button class="button__content--skills button">
            <a class ="button__link" href="https://devpost.com/software/Summerize" target="blank">
              more about Summerize
            </a> 
          </button> 
      </div> -->
      <div class="react__description-mobile">
          <div class="remote__mobile text_white">
              <p>built with JavaScript, Express.js, Node.js, React, 
                azure cognitive services api </p>
            </div>
            <!-- <button class="about__button">
              <a class ="button__link" href="/" target="blank">
                more about Summerize
              </a>
            </button>  -->
      </div>