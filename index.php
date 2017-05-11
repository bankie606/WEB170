<?php
include 'header.php';
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body <?php body_class(); ?>>

            <!--begin content -->
            <div id='content'>        
    
        <span class='coolborder'><h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); ?></a></h2></span>
	<?php the_content(''); ?>

        
 
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



    <?php
include 'footer.php';
?>