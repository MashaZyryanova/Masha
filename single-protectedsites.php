<?php
get_header('new');
$hero_large = get_field('hero_large');
$hero_video = get_field('hero_video');
$hero_image_1 = get_field('hero_image_1');
$hero_image_2 = get_field('hero_image_2');
$process      = get_field('work_process');
$scope      = get_field('scope');
$tech      = get_field('technologies');
$visit     = get_field('visit');
$link     = get_field('link');
?>
<!-- Post
=============================================== -->
<main id="swup" class="transition-fade">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div id="post">
    <?php
    if(have_posts()){
        while(have_posts()){
            the_post();
        
        }
    }
    ?>
    <div class="">
		
        <div class="heading__new post__heading ProtectedContent__narrow">
            <h1 style="text-align:center;" class="heading__new" id="heading__new--post">
                <?php the_title(); ?>
                <span class="dot dot--blue"></span>
            </h1>
        </div>
		<div class="ProtectedContent">
			<div class="ProtectedContent__narro">
				<?php the_content(); ?>
			</div>
		</div>  
    </div>

    <div style="margin-bottom:40px;margin-top:50px;">
        <h5 style="text-align:center;">
            <a class="explore explore--dark" style="font-weight:700;" href="https://localhost/masha/portfolio-new/">Back to portfolio</a></h5>
    </div>

</main>
<?php get_footer('simple'); ?>