<?php
/*assets scripts*/

function js_script()
{
    // Nos aseguramos que no estamos en el área de administración
    if (!is_admin()) {
        // Registramos los scripts correctamente con dependencias y ubicación en el footer
        wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/libs/js/bootstrap.bundle.min.js', array('jquery'), null,
            true);
        wp_register_script('carrusel','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '1',
            true);
        wp_register_script('mi-js', get_template_directory_uri() . '/assets/libs/js/code.js', array('jquery'), '1',
            true);
        /* Encolamos los JS */
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('carrusel');
        wp_enqueue_script('mi-js');
    }
}
add_action("wp_enqueue_scripts", "js_script", 1);