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
add_filter( 'body_class', 'red_starter_body_classes' );

function inhabitent_login_url() {
	return get_site_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_url');

function inhabitent_login_logo(){
	$logo_url = get_template_directory_uri().'/logos/inhabitent-logo-text-dark.svg';
	echo "<style>
	.login h1 a{
		background-image: url($logo_url);
		background-repeat: no-repeat;
		background-size: 500px 53px;
		width:300px;
		height:53px;
		}	

	.login .button.button-primary {
		background-color: #248A83;

	}
	</style>";
}

add_action('login_head', 'inhabitent_login_logo' );