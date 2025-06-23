<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mr._graham\'s_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1><?php the_title()?></h1>
	<?php include get_template_directory() . '/assets/modules/products/loop-products.php'; ?>

</article><!-- #post-<?php the_ID(); ?> -->
