<?php

/*
    Template Name: services, No Sidebar
*/

get_header();  ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                        
        <?php $image = get_field('service-background-image'); ?>

            <!-- start of service intro -->
            <div class="service-page-hero top-margin" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
        
                <div class="service-page">
                    <div class="service-page-intro">
                        <h2><?php the_field("service-page-title"); ?></h2>
                        <hr>
                        <h3 class="wow fadeInUp"><?php the_field("service-page-subtitle"); ?></h3>
                    </div>
         
                </div>
                <div class="overlay"></div>
            </div>
            <!-- end of service intro -->
            <!-- start of service item container -->
            <div class="service-item-container">

                <?php if( have_rows('services-item') ): ?>
                 
                    <?php while(the_repeater_field('services-item')): ?>

                        <div class="services-item">
                            <div class="service-content ">
                                <p class="wow fadeInUp"><?php the_sub_field('service-icon'); ?></p>
                                <h2 class="wow fadeInUp"><?php the_sub_field('service-item-title'); ?></h2>
                                <p class="wow fadeInUp"><?php the_sub_field('service-item-content'); ?></p>
                            </div>
                            
                            <div class="overlay">
                                
                            </div>
                        </div>     
                    <?php endwhile; ?> 
                <?php endif; ?>
            </div>
            <!-- end of service item container -->
         

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>