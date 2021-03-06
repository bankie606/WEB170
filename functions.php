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

function register_my_menu() {
  register_nav_menu('new-menu',__( 'Slide Menu' ));
}
add_action( 'init', 'register_my_menu' );


//Register Widgets
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
	)); 


//Add thumbnails to posts
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
    return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

//enable excerpts for meta description



//SEO title grabber
function get_title_tag() {
	
		global $post;
			if (is_front_page()) { // for the front page of the site
				bloginfo('description'); //tagline
			} elseif (is_page()) { //if not frontpage
				the_title(); //get page title
				if ($post->post_parent) { // if page has parent
				echo ' @ '; //separator
				echo get_the_title($post->post_parent); //retrieve the parent page title
				}

				}elseif (is_category()) { //site categories
				echo get_the_category()[0]->cat_name;
                }elseif (is_single()) { //single post
					the_title(); //postingtitle
				} else {
				bloginfo('description'); //snatch the tagline
				}
    				echo ' @ '; // separator with spaces
    				bloginfo('name'); // retrieve the site name
    				echo ' @ '; // separator with spaces
    				bloginfo ('url'); // write in the location
	
}




?>