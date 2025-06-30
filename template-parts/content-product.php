<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mr._graham\'s_theme
 */

?>

<article id='producto' <?php post_class(); ?>>
	<?php
	if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
			'</a></h2>' );
	endif;

	if ( 'post' === get_post_type() ) :
		?>
        <div class="entry-meta">
			<?php
			mr_grahams_theme_posted_on();
			mr_grahams_theme_posted_by();
			?>
        </div><!-- .entry-meta -->
	<?php endif; ?>
    <div class="row">
		<?php
		the_content(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mr-grahams-theme' ),
					[
						'span' => [
							'class' => [],
						],
					]
				),
				wp_kses_post( get_the_title() )
			)
		);
		?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->