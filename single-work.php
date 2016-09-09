<?php get_header(); ?>


      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div class="single-work">
           <div class="single-intro">
               <h1> <?php the_title(); ?></h1>
                <hr>
               <div class="single-work-description wow fadeInUp">
                   <?php the_content(); ?>
               </div>

           </div>

            <?php if( have_rows('work-single-example') ): ?>
                <?php while( have_rows('work-single-example') ): the_row(); 
                        // vars
                        $image = get_sub_field('image');
                        ?>
                        
               
                       <div class="single-example">
                            <div class="example-image" style="background-image: url('<?php echo $image['sizes'] ['home-work'] ; ?>');">


                                
                            </div>
                            <div class="example-content wow fadeInUp">
                                <h2><?php the_sub_field('title'); ?></h2>

                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>                          

                <?php endwhile; ?>

            <?php endif; ?>

            <?php if( have_rows('link') ): ?>
             
                <?php while(the_repeater_field('link')): ?>

                    <div class="live-site">
                        <a target="_blank" href="<?php the_sub_field('link-url'); ?>">
                           <p><?php the_sub_field('link-name'); ?></p>
                        </a>
                    </div>
                    <div class="back-portfolio">
                        <?php $page_id = 161; ?>
                        <a  href="<?php echo get_permalink( $page_id ); ?>"> 
                        <p> Back To Portfolio</p>
                           
                        </a>
                    </div>

                <?php endwhile; ?> 
            <?php endif; ?>

           

             

        </div>      

      <?php endwhile; // end of the loop. ?>

 

<?php get_footer(); ?>