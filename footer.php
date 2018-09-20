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
		<div class="footer-container page-footer">
			<nav class="footer-nav">
				<?php	wp_nav_menu( array( 'theme_location' => 'menu-2',	));	?>
			</nav>
			<img src="./images/use/FooterDivider.png" alt="dotted divider graphic" />
			<a href="mailto:aadf_pgh@alleghenyconference.org">aadf_pgh@alleghenyconference.org</a>
			<div class="site-info text-center screen-reader-text text-center invisible">
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'aadf' ), 'aadf', '<a href="http://mirandaknee.com/" rel="designer">Miranda Knee</a>' ); ?>
			</div><!-- .site-screenreader-info -->
		</div><!--close of footer-container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
