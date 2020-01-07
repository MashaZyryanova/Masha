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

<p id="games__info">
              Superheroes save lives and have superpowers. In our game, groups of friends enjoy competing
               for the best superhero pose and then get inspired to become a superhero in real life. They gain their superpowers by performing small acts of kindness that go a long way.
               Currently, we support gifting a superhero costume or an educational book to kids that need help.
</p>

<p id="web__info">Responsive web pages for fashion and e-commerce websites. Built using HTML5, css3, svg graphics, wordpress.</p>