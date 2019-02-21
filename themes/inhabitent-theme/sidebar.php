<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<i class="fas fa-phone"></i>
	<i class="fas fa-envelope"></i>
	<i class="fas fa-map-marker-alt"></i>
</div><!-- #secondary -->
