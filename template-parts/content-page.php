<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mr._graham\'s_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<?php mr_grahams_theme_post_thumbnail(); ?>

    <div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mr-grahams-theme' ),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
