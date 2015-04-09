<?php
/**
 * The template for displaying all single posts.
 *
 * @package bautheme
 */

get_header(); ?>

	<div id="primary">
		<main id="main-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->


<?php get_footer(); ?>