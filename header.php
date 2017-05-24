<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fred Wildlife Refuge</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    </head>
    <body data-feedly-mini="yes">
        <div id="mainwrapper"> 
        <a href="http://web170.frcrescioni.net/wordpress/"><img id="logo" src="<?php echo get_bloginfo('template_url') ?>/images/chillfredlogo.jpg" alt="Fred Logo"></a>
            
    
            
            <h1 id="fredtext">FRED WILDLIFE REFUGE</h1>
	<!-- Begin Navigation -->



<?php wp_nav_menu( 
	array( 
	'theme_location' => 'main-menu', 
	'container' => 'ul', 
	'menu_id' => 'navigation', 
 	'items_wrap' => '<ul></ul>', 
    	
	) 
); 
?>
 



<?php get_sidebar(); ?>

          
        <!--End Navigation -->
<video autoplay muted poster="http://web170.frcrescioni.net/wordpress/wp-content/uploads/2017/04/chillfredlogo.jpg" id="bgvid" class="backgroundvid" loop>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source id='motionbackground' src="http://ridethegrid.net/web200/final/media/guitartime.mp4" type="video/mp4">
</video>

            <!--begin content -->
