<div class="entry">
    <div class="entry-title">
        <div class="entry-title__one" >
            <a  href="<?php the_permalink(); ?>">
                <h2 class="subheading" id="subheading--posts"><?php the_title();?></h2>
            </a>
        </div> 
        <div class="entry-title__two" >
            <a   href="<?php the_permalink(); ?>">
                <h2 class="category" ><?php the_category();?></h2>
            </a>
        </div>
               
          <!-- <span><a class="explore--dark" href="<?php the_permalink(); ?>">wordpress</a></span>    -->
    </div>

    <?php
    if(has_post_thumbnail()){
        ?>
        <div class="entry-image shadow">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full',['class' =>'img__web']); ?>
            </a>
        </div>
        <?php

    }
    ?>  


        





</div>