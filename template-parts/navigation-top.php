<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'aadf' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo aadf_get_svg( array( 'icon' => 'bars' ) );
		echo aadf_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'aadf' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'header-menu',
	) ); ?>

	<?php if ( ( aadf_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo aadf_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'aadf' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
