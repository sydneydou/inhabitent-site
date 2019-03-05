<?php

/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div class="content-main">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if (have_posts()) : ?>

			
				<header>
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
				

				<?php /* Start the Loop */ ?>
				<?php while (have_posts()) : the_post(); ?>

				<?php get_template_part('template-parts/content', 'search'); ?>

				<?php endwhile; ?>

				<?php red_starter_numbered_pagination(); ?>

				<?php else : ?>

					<?php get_template_part('template-parts/content', 'none'); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

