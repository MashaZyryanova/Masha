<?php
get_header();
$hero_image_1 = get_field('hero_image_1');
$hero_image_2 = get_field('hero_image_2');
?>
<!-- Post
=============================================== -->
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
            <h1 class="heading__new heading__new--post">
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

    <div class="color-wrapper">
        <div class="wrapper__top"></div>
        <div class="wrapper__main">
            <div class="hero__image">
                <img src="<?php echo $hero_image_1['url']; ?>" alt="hero image 1">
            </div>
            <div class="hero__image">
                <img src="<?php echo $hero_image_2['url']; ?>" alt="hero image 2">
            </div>
        </div>
    </div>




</div>

