
<!-- start of about -->

      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <div class="about" id="about">
            <h1>I'm so happy you are visiting</h1>
            <hr>
            <div class="parent body-wrapper">

                <div class="about-image wow fadeInLeft">
                    <div class="image-wrapper">
                        <?php $image = get_field('about-image'); ?>
                        <img src="<?php echo $image['sizes']['bio'] ?>"> 
                        
                    </div>
                </div>
                <div class="about-content wow fadeInRight">

                    <h2 class= ""><?php the_field("about-title1"); ?></h2>

                    
                    <div class="about-title2">
                        <h3 class= ""><?php the_field("about-title1b"); ?></h3>
                        <?php the_field("about-title2"); ?>
                    </div>

                    <div class="about-text">
                        <?php the_field("about-text"); ?>
                    </div>
                   
                    
                </div>
                
            </div>
        	
        	
        </div>

      <?php endwhile; // end the loop?>
<!-- end of about -->