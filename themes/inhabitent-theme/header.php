<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>
				<header id="masthead" class="site-header" role="banner">
					<div class="container">
						<a class="front-logo" href="<?php bloginfo('url'); ?>"> </a>
						<nav id="site-navigation" class="main-navigation" role="navigation">
					
							<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
							<div class="search-bar">
							<?php get_search_form(); ?>
							</div>
						</nav><!-- #site-navigation -->
					</div>
				
				</header><!-- #masthead -->

		</div>
