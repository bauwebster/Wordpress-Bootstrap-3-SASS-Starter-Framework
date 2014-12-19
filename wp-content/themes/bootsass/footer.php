<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bootsass
 */
?>

	</div><!-- #site-content -->

	<footer id="site-footer" role="contentinfo">

		<section>
			<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bootsass' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'bootsass' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'bootsass' ), 'bootsass', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div><!-- .site-info -->
		</section>

	</footer><!-- #site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
