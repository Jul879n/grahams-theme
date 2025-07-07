
<!-- contenido videos -->
<div class="container-fluid p-0 mt-3">
    <?php
    $args = [
        'posts_per_page' => 20,
        // Número máximo de publicaciones a mostrar
        'post_type' => 'product',
        // Tipo de publicación a consultar
        'post_status' => 'publish',
        // Estado de la publicación
    ];
    $featured_product = new WP_Query($args); // Realizar la consulta de publicaciones
    if ($featured_product->have_posts()) { // Comprobar si hay publicaciones encontradas ?>
    <h2>Productos</h2>
    <div class="swiper swiper-products w-100">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php while ($featured_product->have_posts()):
            $featured_product->the_post();
            ?>
            <!-- Slides -->
            <div class="swiper-slide">
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
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>