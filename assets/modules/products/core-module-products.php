<?php  /*  videos */

function promo_register()
{

    $labels = array(
        'name' => _x('promociones', 'post type general name'),
        'singular_name' => _x('promociones', 'post type singular name'),
        'add_new' => _x('Agregar promoción', 'slideshow_two item'),
        'add_new_item' => __('Agregar promoción'),
        'edit_item' => __('Editar promoción'),
        'new_item' => __('Nueva promoción'),
        'view_item' => __('Ver la promoción'),
        'search_items' => __('Buscar promoción'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-list-view',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail', 'excerpt', 'editor'),
        'rewrite' => array('slug' => 'promociones', 'with_front' => false)
    );

    register_post_type('promociones', $args);
}

add_action('init', 'promo_register');

/*categorias personalizadas*/
function banner_promotion()
{
    // Registro de la taxonomía
    register_taxonomy(
        'en-banner',
        'promociones',
        array(
            'label' => __('Aparece en banner?'), // Cambie la etiqueta
            'rewrite' => array('slug' => 'en-banner'), // Cambie el slug
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_quick_edit' => true,
        )
    );

}
add_action('init', 'banner_promotion');