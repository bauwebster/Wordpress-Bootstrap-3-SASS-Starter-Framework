<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bautheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wow fadeInUp'); ?> data-wow-duration="1s">
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bautheme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<section class="entry-summary">
		<?php the_excerpt(); ?>
	</section><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php bautheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
