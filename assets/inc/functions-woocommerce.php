<?php
// Eliminar productos relacionados en WooCommerce
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );