<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="archive-product-name">
				<div class="page-title-main">
					<?php echo '<h1 class="page-title">'.single_term_title().'</h1>'; ?>
				</div>
					<div class="product-chunk">
						<?php echo '<h1 class="page-title">'.term_description().'</h1>'; ?>
					</div>
				</div>
				<div class="shop-loop">
            		<?php while ( have_posts() ) : the_post(); ?>


					<?php
					get_template_part( 'template-parts/content', 'shop' );
					?>

					<?php endwhile; ?>
				</div>
			</div>		
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
