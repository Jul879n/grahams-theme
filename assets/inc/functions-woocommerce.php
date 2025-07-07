<?php
// Eliminar productos relacionados en WooCommerce
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('script', get_template_directory_uri() . '/assets/libs/js/code.js', array('jquery'), null, true);
	$cart_count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
	wp_localize_script('script', 'cartData', array(
		'count' => $cart_count,
		'siteUrl' => get_site_url()
	));
});

add_action('wp_ajax_nopriv_get_cart_count', 'get_cart_count');
add_action('wp_ajax_get_cart_count', 'get_cart_count');
function get_cart_count() {
	echo WC()->cart->get_cart_contents_count();
	wp_die();
}
