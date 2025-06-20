<?php

function css_base_framework(){
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap', array(), null);
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/libs/css/bootstrap.min.css', array(), null);
    wp_register_style('iconos', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), null);
    wp_register_style('carrusel','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_register_style('estilos', get_template_directory_uri() . '/assets/libs/css/style.css', array(), null);

    wp_enqueue_style('fuentes');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('iconos');
    wp_enqueue_style('carrusel');
    wp_enqueue_style('estilos');

}
add_action('wp_enqueue_scripts', 'css_base_framework');