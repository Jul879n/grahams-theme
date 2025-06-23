<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mr._graham\'s_theme
 */

?>
<footer class='text-verde d-flex flex-column align-content-start border-top border-2 py-3 mt-5 border-green'>
	<?php if ( is_active_sidebar( 'footer-1' ) ) :
		dynamic_sidebar( 'footer-1' );
	endif; ?>
    <span>©
    <?php echo get_bloginfo( 'name' ); ?> <?php echo date( 'Y' ); ?>
</span>
    <p><?php
	    $store_address     = get_option( 'woocommerce_store_address' );
	    $store_address_2   = get_option( 'woocommerce_store_address_2' );
	    $store_city        = get_option( 'woocommerce_store_city' );
	    $store_postcode    = get_option( 'woocommerce_store_postcode' );
	    $full_address = $store_address . ' ' . $store_address_2 . ', '. $store_city;

	    echo esc_html($full_address);
	    ?></p>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
