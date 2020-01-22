<div class="entry">
    
    

    <div class="entry-title">
               
                <h2><?php the_title();?></h2>
               <span><a class="explore--dark" href="<?php the_permalink(); ?>">wordpress</a></span>   
    </div>

    <?php
    if(has_post_thumbnail()){
        ?>
        <div class="entry-image shadow">
            <!-- <a href="#"> -->
                <?php the_post_thumbnail('full',['class' =>'img__web']); ?>
            <!-- </a> -->
        </div>
        <?php

    }
    ?>  


        





</div>