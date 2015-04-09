<?php
/**
 * @package bautheme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wow fadeInUp'); ?> data-wow-duration="1s">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php bautheme_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bautheme' ),
				'after'  => '</div>',
			) );
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bautheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
