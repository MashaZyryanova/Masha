<?php get_header();?>

<h1 id="heading__posts" class="heading__new"><?php wp_title(' ', true , ' '); ?><span class="dot dot--blue"></span></h1>
<!-- Posts
=============================================== -->
<div id="posts">
    
    <?php
        if(have_posts()){
            while(have_posts()){
                the_post();
              
                // <h1 class="posts__heading"></h1>
                get_template_part('template-parts/post/content-excerpt');
            }
        }
    ?>
</div> 
<!-- End posts -->
