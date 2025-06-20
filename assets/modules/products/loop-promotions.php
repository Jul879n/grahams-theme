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

<!-- contenido videos -->
<div class="seccion-portada container-fluid p-0">
    <?php $active = true;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = -1; // -1 shows all posts
    $args = [
        'post_type' => 'promociones',
        'orderby' => 'rand',
        'order' => 'asc',
        'paged' => $paged,
        'posts_per_page' => $post_per_page,
        'tax_query' => [
            [
                'taxonomy' => 'en-banner',
                'field' => 'slug',
                'terms' => 'si',
            ],
        ],
    ];

    $wp_query = new WP_Query($args);
    if (have_posts()): ?>
    <div class="swiper swiper-promotions w-100">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <?php while ($wp_query->have_posts()):
                $wp_query->the_post(); ?>
                <!-- Slides -->
               <div class="swiper-slide card text-mostaza position-relative overflow-hidden">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="...">
                    <div class="card-img-overlay d-flex flex-column justify-content-end  pb-5 text-card-overlay ">
                        <h2 class="card-title"><?php the_title() ?></h2>
                       <?php the_content() ?>
                    </div>
                </div>

            <?php endwhile;
            endif; ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <?php wp_reset_query();
    $wp_query = $temp ?>
</div>