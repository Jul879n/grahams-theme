<?php
/**
 * Template name: Inicio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ecommerce_template
 */

get_header();
?>

    <main id="home-page" class="site-main container">

        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content-home-page', 'page' );



        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
<?php
get_footer();
