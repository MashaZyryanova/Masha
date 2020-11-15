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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div id="post">
    <?php
    if(have_posts()){
        while(have_posts()){
            the_post();
        
        }
    }
    ?>
    <div class="post__heading-wrapper">
        <div class="heading__new post__heading">
            <h1 class="heading__new" id="heading__new--post">
                <?php the_title(); ?>
                <span class="dot dot--blue"></span>
            </h1>
        </div>
        <div class="post__description">
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    </div>

    

        <?php if(! empty($hero_large))

            { 
                ?>
			<div class="wrapper__large__image">
                <div class="large__image shadow">
                    <img src="<?php echo $hero_large['url']; ?>" alt="hero large">
                </div>
			</div>
            <?php
            }
            

             elseif (!empty($hero_video))
            {
            	?>
			<div class="wrapper__large__image">
                <div class="hero_video shadow">
                    <?php echo $hero_video; ?>
                </div>
			</div>
            
            <?php
               }
		
            else
			{
				?>
				<div class="large__image--nopadding">
                    
                </div>
		
			<?php } ?>
            
    


    <?php 
    if(! empty($hero_image_1))

        { 
        ?> 

        <div class="color-wrapper">
            <div class="wrapper__top"></div>
            <div class="wrapper__main">
          
                   <div class="hero__image shadow">
                        <img src="<?php echo $hero_image_1['url']; ?>" alt="hero image 1">
                    </div>
                <?php
                }
            ?>

            <?php if(! empty($hero_image_2))
                { 
                ?>
                    <div class="hero__image shadow">
                        <img src="<?php echo $hero_image_2['url']; ?>" alt="hero image 2">
                    </div>
                <?php
                }
                ?>
        </div>
    </div>

    <div class="content__overview">
      <?php 
            if(! empty($process))

            { 
                ?>
        <div class="overview">
            <h3 class="subheading" id="subheading__overview">Overview</h3>
            <p id="overview__text"><?php echo $process; ?></p>
        </div>
		 <?php
                }
                ?>
        <div class="content__meta">
			  <?php 
            if(! empty($scope))

            { 
                ?>
				<h5 class="subheading" id="subheading--post">Scope</h5>
				<p class="content__meta__text"><?php echo $scope; ?></p>
			
			 <?php
                }
                ?>
			  <?php 
            if(! empty($tech))

            { 
                ?>
			
            <h5 class="subheading" id="subheading--post">Technologies</h5>
            <p class="content__meta__text"><?php echo $tech; ?></p>
			
			<?php
                }
                ?>

            <?php 
            if(! empty($visit))

            { 
                ?>
            <h5 class="subheading" id="subheading--post">Visit Website</h5>
            <a id="liveUrl" href="<?php echo $link; ?>" target="_blank" class="content__meta__text"><?php echo $visit; ?></a>

            <?php
                }
                ?>

        </div>

    </div>

    <div style="margin-bottom:40px;margin-top:50px;">
        <h5 style="text-align:center;">
            <a class="explore explore--dark" style="font-weight:700;" href="https://webwithmasha.com/portfolio-new/">Back to portfolio</a></h5>
    </div>


</div>
</article>

<?php get_footer('simple'); ?>