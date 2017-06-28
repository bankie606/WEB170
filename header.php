<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php get_title_tag(); ?></title>
	<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
	<meta name="keywords" content="<?php echo bloginfo('description'); ?>" />
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css"type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slidebars.css"type="text/css">
	<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/scripts/slidebars.js"></script>


<!-- begin flex slider -->
<script type="text/javascript" charset="utf-8">
 $(window).load(function() { //enable function upon window load
	$('.flexslider').flexslider(); // call flexslider function
	});
</script>
<!-- end flex slider -->
    </head>



    <body>
	<div canvas="container" id="sb-site">
        <div id="mainwrapper"> 
        <a href="http://web170.frcrescioni.net/wordpress/"><img id="logo" src="<?php echo get_bloginfo('template_url') ?>/images/chillfredlogo.jpg" alt="Fred Logo"></a>
            
   

            <h1 id="fredtext">FRED WILDLIFE REFUGE</h1>
	<!-- Begin Navigation -->



<?php wp_nav_menu( array( 
	'theme_location' => 'main-menu', 
	'container' => '<ul>', 
	'menu_id' => 'navigation',
	));?>
 




<div class="button-group">
								<span class="button toggle-id-1"><i class="fa fa-eye"></i>MENu</span>
							</div>




<?php get_sidebar(); ?>
          
        <!--End Navigation -->
<div id="video">
<div id="imageContainer" class="center">
  <img src="http://web170.frcrescioni.net/wordpress/wp-content/uploads/2017/06/guitartime.gif">
</div>
</div>
            <!--begin content -->
