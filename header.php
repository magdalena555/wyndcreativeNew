<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <script src="https://use.fontawesome.com/641d5efb29.js"></script>
<!--   <link href='https://fonts.googleapis.com/css?family=Cabin:400,500|Prata' rel='stylesheet' type='text/css'> -->
<link href="https://fonts.googleapis.com/css?family=Prata|Raleway:100,400" rel="stylesheet">


  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
    <!-- header-wrapper -->
    <div class="header-wrapper">

            <!-- menu container -->
        <div id="menu-container">
            <!-- logo -->
            <div class="logo">
                
                <!-- options acf !!!!!!-->
            
            

                
                <?php $page_id = 4; ?>
                <a  href="<?php echo get_permalink( $page_id ); ?>"> 
                  
                   <img  src="<?php bloginfo("template_url")?>/images/wynd-new-logo.svg" width="100" >

                </a>

            </div>
            
            <!-- left nav -->
            <nav class="desktop-nav ">
                

                <?php wp_nav_menu( array(
                  'container' => false,
                  'theme_location' => 'main'
                )); ?>
            </nav>
            <nav class="mobile ">

                <?php wp_nav_menu( array(
                  'container' => false,
                  'theme_location' => 'mobile'
                )); ?>
                
            </nav>
            

        
            
            <!-- hamburger menu -->
            <a href="#" class="mobileNavIcon"><i class="fa fa-bars"></i></a>
        </div>   
        
    </div> <!-- header wrapper -->
</header><!--/.header-->

