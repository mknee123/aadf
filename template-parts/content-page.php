<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aadf_2018
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="flex-container">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title entry-title-subpage">', '</h1>' ); ?>
			<div class="thumb-container">
			<?php aadf_post_thumbnail(); ?>
		</div>
		</header><!-- .entry-header -->

		<div class="entry-content content-width-750">
			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aadf' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

	</div><!--close of flex-container>
		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'aadf' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
