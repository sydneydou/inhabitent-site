<?php

/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
?>
<div class="findus">
<?php get_header(); ?>
<div class="content-main">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div>
				<div class="title-findus">
					<h2> Find Us </h2>
				</div>

				<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'page'); ?>

				<?php endwhile; // End of the loop. ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</div>
