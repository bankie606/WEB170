<?php
/*
Theme Name: Funky Freddy
Theme URI: http://github.com/bankie606
Author: F. Crescioni
Author URI: http://frcrescioni.net/
Description: A theme for one of the funkiest places in Seattle.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: white, pink, transparent, textshadow, cool,
Text Domain: funkyfreddy

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/



/**
 * For advanced users:
 *
 * Place any custom WordPress hooks or theme functions into this file.
 *
 * This file is optional and can be omitted from your custom theme.
 */

//Register Menu Locations
register_nav_menus(array('main-menu' => 'Main Menu' ));




//Register Widgets
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
	)); 


//Add thumbnails to posts
add_theme_support('post-thumbnails');


  //create a flexslider gallery from attachment images
    function get_flexslider() {
	
    global $post; // don't forget to make this a global variable inside your function
    $attachments = get_children(array('post_parent' => $post->ID,'post_type' => 'attachment', 'post_mime_type' => 'image'. 'order' =>'ASC', 'orderby' => 'menu_order'));
    if ($attachments) { // see if there are images attached to posting
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
        foreach ( $attachments as $attachment ) { // create the list items for images with captions
            echo '<li>';
            echo wp_get_attachment_image($attachment->ID, 'large'); // get image size large
            echo get_post_field('post_content', $attachment->ID); // get image description field
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    } // end see if images attached
} 

?>