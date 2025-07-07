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
    <div id='banner'
         class='position-relative mb-5'
         style='width:100%; height:30rem;'>
        <img class='object-fit-cover rounded-1 w-100'
             src='<?php echo get_the_post_thumbnail_url(); ?>'
             alt='<?php echo esc_attr( get_the_title() ); ?>'
             style='height:90%;'>
        <div id='title-banner'
             class='z-1 position-absolute d-flex justify-content-start align-items-end w-100'>
            <div id='logo'
                 class='rounded-circle bg-mostaza d-flex justify-content-center align-items-center'>
				<?php echo get_custom_logo(); ?>
            </div>
            <h1 class='px-2 rounded-top-2'><?php the_title() ?></h1>
        </div>
    </div>
	<?php include get_template_directory() . '/assets/modules/products/loop-promotions.php'; ?>
	<?php include get_template_directory() . '/assets/modules/products/loop-featured.php'; ?>
	<?php include get_template_directory() . '/assets/modules/products/loop-products.php'; ?>

</article><!-- #post-<?php the_ID(); ?> -->
