<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tanisha_Rose_Development
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'trd' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'trd' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				&copy; 
				<?php
				echo do_shortcode("[year][/year]");
				/* translators: 1: Theme name, 2: Theme author. */
				printf( ' <a href="http://tanisharosemedia.com">Tanisha Rose</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
