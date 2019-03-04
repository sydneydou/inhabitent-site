<?php

/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="product-bundle">
			<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('large'); ?>
			<?php endif; ?>
			<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
		</div>
		<div class="product-specific">
			<span class="pricing"> <?php echo CFS()->get('product_price'); ?> </span>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
		
	</header>
	
	

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
