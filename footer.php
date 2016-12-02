<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>

	</div><!-- #content -->
	
	<footer class="footer">
		<div class="pre-footer"></div>
		<div class="footer-inner">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blank' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'blank' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'blank' ), 'blank', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
