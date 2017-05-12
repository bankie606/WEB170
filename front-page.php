@@ -0,0 +1,48 @@
<?php
include 'header.php';
?>


<!-- Begin Widgets -->
    <div id="widgets">
        <aside class="widget-item">
        <h2>Look At Us:</h2>
      
            <img class="sideimage" src="http://web170.frcrescioni.net/wordpress/wp-content/uploads/2017/05/7417180790_7a3b8f6e06_b.jpg">
            
            
        </aside>
        <aside class="widget-item">
        <h2>Latest Postings:</h2>
        <ul>
		<?php rewind_posts(); // stop loop one ?>
        <?php query_posts( array(
    'category_name'=> 'event', 'posts_per_page'=> 2)); // give directions to loop two ?>
        <?php while (have_posts()) : the_post(); // start loop two ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // end loop two ?>
        </ul>
        </aside>
        
        
        <aside class="widget-item">
        <h2>Contact Us:</h2>
        <p class="cooltext">127 Boylston Ave East (Office / Studio 2)
128 Belmont Ave East (Events / Studio 1)
Seattle, WA 98102
<br>
         
fred@fredwildliferefuge.com
Tel: 206.588.6959
            </p>
        </aside>
    </div>
    <!-- End Widgets -->





<?php
include 'footer.php';
?>
