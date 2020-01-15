<div class="entry">
    <?php

    if(has_post_thumbnail()){
        ?>
        <div class="entry-image">
            <!-- <a href="#"> -->
                <?php the_post_thumbnail('full',['class' =>'img__web']); ?>
            <!-- </a> -->
        </div>
        <?php

    }
    ?>  


        <div class="entry-title">
            <h2><?php the_title();?></h2>
                
            <a class="explore" href="<?php the_permalink(); ?>">explore</a>
            
        </div>





</div>