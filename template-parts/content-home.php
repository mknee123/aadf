<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aadf_2018
*/
/*
 Template Name: Home Page
 */

?>
<?php get_header('home'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header entry-header-home">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

<?php /*?><?php aadf_post_thumbnail(); ?><?php */?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages();
		?>
	</div><!-- .entry-content -->
<?php endwhile; endif; ?>
</article><!-- #post -->

<?php get_footer('hp'); ?>
