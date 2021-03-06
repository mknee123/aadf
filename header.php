<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aadf_2018
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://unpkg.com/scrollreveal"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aadf' ); ?></a>

	<header id="masthead" class="site-header" role="banner" style="max-width:1200px; width:100%; margin:0 auto;">

		<div class="site-branding desktop" >
			<?php	the_custom_logo(); ?>
		</div><!-- .site-branding -->
		<nav id="site-navigation" class="main-navigation"  role="navigation">

			<button class="menu-toggle" aria-controls="header-menu" aria-expanded="false">
				<div class="site-branding mobile" >
					<?php	the_custom_logo(); ?>
				</div><!-- .site-branding -->
			<p>	<?php esc_html_e( '', 'aadf' ); ?></p>
			</button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'header-menu',
			) );
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<?php if ( get_header_image() && is_front_page() ) : ?>
 <!--comment out since there isn't a real effect for parallax on homepage
 <div class="header-image-parallax">
	</div>
	-->
		<figure class="header-image">
	    <div id="site-header">
	            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

	    </div>
		</figure><!--end header image -->
<?php endif; ?>

	<div id="content" class="site-content">
