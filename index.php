<?php
get_header();
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<body <?php body_class(); ?>>

            <!--begin content -->
            <div id='content'>        
    
        <span class='coolborder'>

<h2><a class="headerlink" href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); ?></a></h2></span>
	 <?php get_flexslider(); ?>

<small>Posted on <?php the_time('F j, Y'); //get the time ?> by <?php the_author(); //get author name ?> in <?php the_category(', ');// get the category ?></small>
           <?php the_excerpt(); //get the posting's excerpt ?>

		
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>


 
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>



    <?php
get_footer();
?>