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