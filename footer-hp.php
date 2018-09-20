<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aadf_2018
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-container home-footer">
			<!--<img src="wp-content/themes/aadf/images/use/Footer.jpg" alt="footer graphic" -->

			<div class="site-info footer-info">
				<nav class="footer-nav">
					<?php	wp_nav_menu( array( 'theme_location' => 'menu-2',	));	?>
				</nav>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aadf' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by the beautiful  %s', 'aadf' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'aadf' ), 'aadf', '<a href="http://mirandaknee.com">Miranda_Knee</a>' );
					?>
			</div><!-- .site-info -->
		</div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
