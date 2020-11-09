<?php
/**
* Template Name: Portfolio
*
*/
?>
<?php get_header(); ?>
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
<?php 
 $args = array(  
    'post_type' => 'protectedsites',
    'post_status' => 'publish',
     
);

    $loop = new WP_Query( $args ); 
  
    if($loop->have_posts()) {
       while ($loop->have_posts()) {
         $loop->the_post();
         get_template_part('template-parts/post/content-excerpt');
        
      }
    }


$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();get_template_part('template-parts/post/content-excerpt'); ?>
       
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

</div>	
	<?php get_footer('simple'); ?>
