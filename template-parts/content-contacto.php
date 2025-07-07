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
    <h1><?php the_title() ?></h1>
    <div class="card mb-3 bg-green text-bg border-0">
        <div class="row g-0">
            <div class="col-md-6">
                <div id="gmap-canvas"
                     style="height:100%; width:100%;max-width:100%;">
                    <iframe style="height:100%;width:100%;border:0;"
                            title="Google map of store location"
                            frameborder="0"
                            src="https://www.google.com/maps/embed/v1/place?q=<?php
					        $store_address   = get_option( 'woocommerce_store_address' );
					        $store_address_2 = get_option( 'woocommerce_store_address_2' );
					        $store_city      = get_option( 'woocommerce_store_city' );
					        $store_postcode  = get_option( 'woocommerce_store_postcode' );
					        $full_address    = $store_address . ' ' . $store_address_2 . ', ' . $store_postcode . ' ' . $store_city;
					        $full_address    = str_replace( ' ', '+', $full_address );

					        echo esc_html( $full_address );
					        ?>&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8
"></iframe>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card-body">
					<?php the_content(); ?>
                    <h3>Datos de contacto</h3>
					<?php
					$correo = get_field( 'correo' );
					if ( ! empty( $correo ) ) : ?>
                        <a target='_blank'
                           class='btn btn-contact'
                           href='mailto:<?php echo esc_html( $correo ); ?>'>
                            <i class="fa-solid fa-envelope"></i>
							<?php echo esc_html( $correo ); ?>
                        </a>
					<?php endif; ?>
					<?php
					$whatsapp = get_field( 'whatsapp' );
					if ( ! empty( $whatsapp ) ) : ?>
                        <a target='_blank'
                           class='btn btn-contact'
                           href='https://wa.me/<?php echo esc_html( $whatsapp ); ?>'>
                            <i class="fa-brands fa-whatsapp"></i>
							<?php echo esc_html( $whatsapp ); ?>
                        </a>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
