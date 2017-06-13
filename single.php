<?php get_header(); ?>
	
<!-- Start Content -->
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="post">
    <h2><?php the_title(); ?></h2>
   <small>Posted on <?php the_time('F j, Y'); //get the time ?> by <?php the_author(); //get author name ?> in <?php the_category(', ');// get the category ?></small>
<?php if ( has_post_thumbnail() ) : ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
<?php endif; ?>
        
        <?php the_content(''); ?>
    <ul class="post-navigation">
        <li class="post-navigation-previous"><?php next_post('&laquo;&nbsp;%','', 'yes'); ?></li>
        <li class="post-navigation-next"><?php previous_post('%&nbsp;&raquo;','', 'yes'); ?></li>
    </ul>
    </article> 

    <?php endwhile; endif; ?>
</div>
<!-- End Content -->

<?php get_footer(); ?>