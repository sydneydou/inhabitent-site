<?php

/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while (have_posts()) : the_post(); ?>
			<div class="product-chunk">
					<?php $product_types = get_terms("product_type"); ?>
			
					<?php foreach ($product_types as $value) : setup_postdata($value); ?>
			
				<?php endforeach; ?>

				<?php wp_reset_postdata(); ?>
		
			</div>

				<?php
				get_template_part('template-parts/content', 'single');
				?>

					<?php endwhile; ?>
			<div class="socials">

				<button> <i class="fab fa-facebook-f"><span>Like </span></i></button>
				<button> <i class="fab fa-twitter"> <span>Tweet</span></i></button>
				<button><i class="fab fa-pinterest"><span> Pin</span></i></button>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
