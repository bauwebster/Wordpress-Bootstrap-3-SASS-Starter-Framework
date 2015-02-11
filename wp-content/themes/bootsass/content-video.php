<?php
/**
 * @package bootsass
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wow fadeInUp'); ?> data-wow-duration="1s">
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php bootsass_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<section class="entry-content">
		<?php the_post_thumbnail(); ?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bootsass' ),
				'after'  => '</div>',
			) );
		?>
	</section><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bootsass_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
