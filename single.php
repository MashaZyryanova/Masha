<?php
get_header('new');
$hero_image_1 = get_field('hero_image_1');
$hero_image_2 = get_field('hero_image_2');
$process      = get_field('work_process');
$scope      = get_field('scope');
$tech      = get_field('technologies');
$visit     = get_field('visit');
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
    <div class="wrapper__large__image">

        <?php
            if(has_post_thumbnail()){

            ?>
            <div class="large__image  ">
                    <?php the_post_thumbnail('full',array(
                        'class' =>'shadow'
                        )); ?>
            </div>
            <?php

            }
            ?>  

    </div>  
       
    <div class="color-wrapper">
        <div class="wrapper__top"></div>
        <div class="wrapper__main">
            <div class="hero__image shadow">
                <img src="<?php echo $hero_image_1['url']; ?>" alt="hero image 1">
            </div>
            <div class="hero__image shadow">
                <img src="<?php echo $hero_image_2['url']; ?>" alt="hero image 2">
            </div>
        </div>
    </div>

    <div class="content__overview">
        <div class="overview">
            <h5>Overview</h5>
            <p><?php echo $process; ?></p>
        </div>
        <div class="content__meta">
            <h5>Scope</h5>
            <p><?php echo $scope; ?></p>
            <h5>Technologies</h5>
            <p><?php echo $tech; ?></p>
            <h5>Visit Website</h5>
            <p><?php echo $visit; ?></p>
        </div>

    </div>




</div>
<div class="footer--post">
    <div class="contact--post"> 
          
          
          
          <a href="mailto:mzyrianova14@gmail.com">
            <h1 class = "email--post">mzyrianova14@gmail.com</h1>
          </a>
          <h1 class = "phone--post">917.576.7664</h1>
          <div class="social">
            <a href="https://www.linkedin.com/in/maria-zyrianova-40465943/" target = "blank">
              <i class="fab fa-linkedin fa-2x"></i>
            </a>
            <a href="https://github.com/NRostova" target = "blank" class="menu__link link">
              <i class="fab fa-github fa-2x" ></i>
            </a>
          
          </div>
        
    </div> 
</div>