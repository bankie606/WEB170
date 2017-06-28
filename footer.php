<!--end content -->   
    
  </div>

<div id='footercontainer'>
        <div id='footer'>
     <footer>127 Boylston Ave East (Office / Studio 2)
128 Belmont Ave East (Events / Studio 1)
Seattle, WA 98102
<br>
         
fred@fredwildliferefuge.com
Tel: 206.588.6959</footer>
    </div>
</div>
</div><!-- end canvas for sliderbars --> 
</div> <!-- end main contentwrapper -->



<div id="mobileNav" off-canvas="id-1 left reveal">
<?php wp_nav_menu( array( 
	'theme_location' => 'new-menu', 
	'container' => '<ul>', 
	'menu_id' => '',
	));?>    
</div>
<?php wp_footer(); ?>
<script type="text/javascript" charset="utf-8">
       ( function ( $ ) {
        // Initialize Slidebars
        var controller = new slidebars();
        controller.init();

        // Toggle Slidebars
        $( '.toggle-id-1' ).on( 'click', function ( event ) {
          // Stop default action and bubbling
          event.stopPropagation();
          event.preventDefault();

          // Toggle the Slidebar with id 'id-1'
          controller.toggle( 'id-1' );
        } );

      } ) ( jQuery );
    </script>

    </body>
    </html>