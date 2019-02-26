<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->
			<section class="shop-push">
				<h2> Shop Stuff </h2>
				<div class="product-chunk">
					<?php $product_types=get_terms("product_type");?>
			
					<?php foreach ($product_types as $value): setup_postdata($value);?>
			
			
                	 <a href=<?php echo get_term_link($value)?>> <?php echo $value->name?></a>
	

		<?php endforeach; wp_reset_postdata();?>

					 </div>
	</div>
				
			</section>
			<section>
				<div class="shop-loop">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'shop' );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
