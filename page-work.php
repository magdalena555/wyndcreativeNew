<?php

/*
    Template Name: work, No Sidebar
*/

get_header();  ?>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <!-- start of work intro -->
        <div class="work-intro">
            <h1 class="wow fadeInUp"> <?php the_title(); ?></h1>
            <hr>
            <h2 class="wow fadeInUp"> <?php the_field("work-page-subtitle"); ?> </h2>
        </div>
        <!-- end of work intro -->
        <!-- start of work page container -->
        <div class="work-page-container">
            <?php 
                $params = array(
                    'posts_per_page' => -1,
                    'post_type' => 'work', 
                    'orderby' => 'date'

                    );
                // this passes the parameter
                $onePageQuery = new WP_Query($params);

                // This is a custom query loop
                if($onePageQuery->have_posts()) while($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
                
                    
                    <a href="<?php the_field('work-link'); ?>">
                        
                        <?php $image = get_field('work-image-large'); ?>

                    
                            <div class="home-work-image" style="background-image: url('<?php echo $image['sizes'] ['square'] ; ?>');">
                        
                                
                                <div class="work-title">
                                    <h2 class="wow fadeInUp">  <?php the_title(); ?></h2>
                                    <p class="wow fadeInUp"><?php the_field("work-specs"); ?></p>
                                </div>
                                
                                <div class="overlay"></div>
                            
                            </div>
                            
        
                        
                        
                    </a>
                    

            <?php endwhile ?>
        </div>
        <!-- end of work page container -->
         

    <?php endwhile; // end the loop?>


<?php get_footer(); ?>