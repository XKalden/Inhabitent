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


function my_custom_login_logo() {
    echo '<style>
        #login h1 a {
            background: url(' . get_template_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg) no-repeat !important;
            background-size: 300px 53px !important; width: 300px !important; height: 53px !important;
        }
        #login .button.button-primary {
            background-color: #248A83;
        }
    </style>';
}

// to add Custome logo


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
