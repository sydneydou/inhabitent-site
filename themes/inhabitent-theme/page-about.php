

<?php

/**
 * The template for displaying all pages.
 * Template Name: page-about 
 *  @package RED_Starter_Theme
 */
?>
<div class="about">
	<?php
get_header(); ?>

   

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
