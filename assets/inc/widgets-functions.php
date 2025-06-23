<?php

function site_widgets(){
    register_sidebar( array(
        'name'          => 'nav-left',
        'id'            => 'nav-left',
        'before_widget' => '<nav class="navbar-nav">',
        'after_widget'  => '</nav>',
        'before_title' => '<h3 class="titulo-menu-nav">', //añadimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
    register_sidebar( array(
        'name'          => 'nav-rigth',
        'id'            => 'nav-rigth',
        'before_widget' => '<nav class="navbar-nav  me-auto mb-2 mb-lg-0">',
        'after_widget'  => '</nav>',
        'before_title' => '<h3 class="titulo-menu-nav">', //añadimos contenedores por titulo
        'after_title' => '</h3>' //cerramos los contenedores de titulo
    ) );
    register_sidebar( array(
        'name'          => 'Footer',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="footer-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'site_widgets' );