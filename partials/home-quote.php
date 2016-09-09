

    <!-- start of quotes -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        
            <?php $image = get_field('quote-bg-image'); ?>
            <div class="  quote"  style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
                <h1 class="wow fadeInUp"><?php the_field('quote-title'); ?></h1>
                    <?php if( have_rows('quote-item') ): ?>
                     
                     
                        <div class="slideshow">
                             <?php while( have_rows('quote-item') ): the_row(); 
                                               // vars
                                 
                                               ?>
                       
                                <div class=" gallery-cell"  >
                                   
                                    
                                    <div class="quote-content">
                             
                                        <div class="text wow fadeInUp">
                                            <?php the_sub_field('quote-content'); ?>
                                        </div>    
                                        <h2 class="wow fadeInUp"><?php the_sub_field('quote-author'); ?></h2>
                                        <h3 class="wow fadeInUp"><?php the_sub_field('quote-author-specs'); ?></h3>
                                        <a target="_blank" href="<?php the_sub_field('site-link'); ?>">
                                            <h5><?php the_sub_field('quote-site'); ?></h5>
                                        </a>
                                       
                                    </div>
                                    <div class="overlay"></div> 
                                        
                                </div>
                
                            <?php endwhile; ?> 
                        </div>
                    <?php endif; ?>
            
                
            </div>   

        </div>
         

      <?php endwhile; // end the loop?>
      <!-- end of quotes -->
