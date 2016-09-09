

  <!-- start of hero -->
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php $image = get_field('hero-image'); ?>
            <div class="hero-wrapper" id="home">
            	<div class=" hero" style="background-image: url('<?php echo $image['sizes'] ['hero'] ; ?>');">
                  
					<div class="image-wrapper">
					    <img  src="<?php bloginfo("template_url")?>/images/wynd-new-full-logo.svg" width="400" >
					    <h2 class= ""><?php the_field("hero-subtitle"); ?></h2>
					    <a href="#about">
					    	<i  class="fa fa-chevron-down animated flash infinite" aria-hidden="true"></i>
					    </a>
					</div>
                </div> 
            	<div class="overlay"></div> 
            </div>
             
          

      <?php endwhile; // end the loop?>
  <!-- end of hero -->
