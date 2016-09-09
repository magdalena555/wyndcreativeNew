

<!-- start of work -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      	

      	<div class="home-work" >
    		
		    <?php 
		        $params = array(
		            'posts_per_page' => 4,
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
									<hr>
									<p class="wow fadeInUp"><?php the_field("work-one-sent"); ?></p>
								</div>
								
								<div class="overlay"></div>
							
		 			 		</div>
		 			 		
		
				 		
						
					</a>
					

		    <?php endwhile ?>
    	</div>

      <?php endwhile; // end the loop?>
<!-- end of work -->