<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package bootsass
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="main-sidebar" class="widget-area wow fadeInUp" role="complementary" data-wow-duration="1s">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
