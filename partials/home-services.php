

      <!-- start of services -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

       <div class="home-services"  >
          <h3 class="wow fadeInUp">Services</h3>
          <hr>
            <div class="home-service-container wow fadeInUp">
                <div class="service-list-left">
                    <?php the_field("service-list-left"); ?>
                </div>

                <div class="service-list-right">
                    <?php the_field("service-list-right"); ?>
                </div>
            </div>
            <?php $page_id = 73; ?>
            <a class="button"  href="<?php echo get_permalink( $page_id ); ?>"> learn more</a>




       </div>


      <?php endwhile; // end the loop?>
      <!-- end of services -->