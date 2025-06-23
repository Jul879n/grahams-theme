<?php
// Incrustar hoja de estilos desde PHP para evitar problemas de caché y rutas
?>
<script>
    function inctrustar_hoja_estilos_products() {
        var hoja_estilos_url =
            '<?php echo get_site_url() . '/wp-content/themes/mr-grahams-theme/assets/modules/products/module-products.css'; ?>';
        var hoja_estilos = document.createElement('link');
        hoja_estilos.rel = 'stylesheet';
        hoja_estilos.href = hoja_estilos_url;
        document.head.appendChild(hoja_estilos);
    }

    inctrustar_hoja_estilos_products();
</script>

<div class="container-fluid p-0 mt-3">
	<div class='row'>
		<?php
		$args = [
			'posts_per_page' => -1, // Número máximo de publicaciones a mostrar
			'post_type'      => 'product', // Tipo de publicación a consultar
			'post_status'    => 'publish', // Solo publicaciones publicadas
		];
		$featured_product = new WP_Query($args); // Realizar la consulta de publicaciones
		if ($featured_product->have_posts()) { // Comprobar si hay publicaciones encontradas ?>
			<?php while ($featured_product->have_posts()):
				$featured_product->the_post();
				?>
				<div class='col-6 col-sm-4 col-lg-2'>
					<?php wc_get_template_part('content', 'product'); ?>
                </div>
			<?php
			endwhile; // Fin del bucle para mostrar cada publicación
		} else {
			echo __('Lo sentimos no hay productos'); // Mostrar mensaje si no se encuentran productos
		}
		wp_reset_postdata(); // Restablecer los datos de la consulta original
		?>
    </div>
</div>