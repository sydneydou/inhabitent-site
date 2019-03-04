<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php echo get_permalink();?>">
		<?php the_post_thumbnail( 'medium' ); ?>
		</a>
		<?php endif; ?>
		<div class="shop-info-chunk">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			........
			<span><?php echo CFS()->get('product_price');?></span>
		</div>
	
	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
