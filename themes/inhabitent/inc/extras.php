<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}


// to add Custome logo
function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_template_directory_uri().'/assets/logoo.svg) !important; 
			background-size:300px 53px !important; width:300px !important; }              
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

// Logo Click return to home page
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );


function my_login_logo_url_title() {
    return 'Inhabitent';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Custome  message
function my_login_custome_message(){
	return 'Welcome to my website';
}
add_filter( 'login_message', 'my_login_custome_message');






add_filter( 'body_class', 'red_starter_body_classes' );
