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

	<h2>Contact Hours</h2>
	<div class="contact-sidebar">
	<i class="fas fa-phone"><span>778-456-7891</span></i>
	<br>
	<i class="fas fa-envelope"><span> info@inhabitent.com</span></i>
	<br>
	<i class="fas fa-map-marker-alt"> 1490 W Broadway
Vancouver, BC V6H 1H5</i>
</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</div><!-- #secondary -->
