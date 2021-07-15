<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package brotakus
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" class="widget-area small-12 large-4 cell" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #sidebar -->
