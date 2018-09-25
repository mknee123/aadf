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

				<img class="footerDivider" src="./wp-content/themes/aadf/images/use/FooterDivider.png" alt="dotted divider graphic" />
				<a href="mailto:aadf_pgh@alleghenyconference.org">aadf_pgh@alleghenyconference.org</a>
				<div class="site-info text-center screen-reader-text text-center invisible">
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'aadf' ), 'aadf', '<a href="http://mirandaknee.com/" rel="designer">Miranda Knee</a>' ); ?>
				</div><!-- .site-screenreader-info -->


			</div><!-- .site-info -->
		</div>



	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
		ScrollReveal().reveal('.entry-header-home h1', { delay: 500 });
		ScrollReveal().reveal('.icon', { interval: 300, delay: 1000 });
</script>
<?php wp_footer('hp'); ?>

</body>
</html>
