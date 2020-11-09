<?php get_header();?>

<h1 id="heading__posts" class="heading__new"><?php wp_title(' ', true , ' '); ?><span class="dot dot--blue"></span></h1>

<div class="portfolio-bar">
    <h3>
        <a class="category-link" href="/category/wordpress/">Wordpress</a>  
    </h3>
    <h3 >
        <a class="category-link" href="/category/react/">React</a>
    </h3>
    <h3 >
        <a class="category-link" href="/category/python/">Python</a>
    </h3>
    <h3 >
        <a class="category-link" href="/category/javascript/">JavaScript</a>
    </h3>
    
</div>
<!-- Posts
=============================================== -->
<div id="posts">
<!-- Get custom post types  -->
	


    <?php
	   
	
        if(have_posts()){
            while(have_posts()) {
                the_post();
                
                get_template_part('template-parts/post/content-excerpt');
            }
        }
    ?>
</div> 
<!-- End posts -->

<?php get_footer('simple'); ?>