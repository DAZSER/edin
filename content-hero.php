<?php
/**
 * The template used for displaying hero content in page.php and page-templates.
 *
 * @package Edin
 */
?>

<div class="hero <?php echo edin_additional_class(); ?>">
	<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>

		<?php the_title( '<div class="hero-wrapper"><h1 class="page-title">', '</h1></div>' ); ?>

	<?php else : ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
				if ( 1 == get_theme_mod( 'edin_title_front_page' ) ) {
					the_title( '<header class="entry-header"><h1 class="page-title">', '</h1></header>' );
				}
			?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'edin' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			<?php edit_post_link( __( 'Edit', 'edin' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
		</article><!-- #post-## -->

	<?php endif; ?>
</div><!-- .hero -->
