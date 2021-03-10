<?php
add_action('init', 'create_posttype' );
function create_posttype(){
    // cria os post_type necessário
    register_post_type('materiais',
        array(
            'labels' => array(
                'name' => __( 'Materiais', 'boilerplate' ),
                'singular_name' => __('Material', 'boilerplate' )
            ),
            'show_in_rest' => true,
            'public' => true,
            'hierarchical' => true,
            'has_archive' => 'materiais',
//            'menu_icon' => 'dashicons-store',
            'menu_position' => 5,
            'rewrite' => array('slug' => 'materiais'),
            'supports' => array(
                'title',
                'editor',
//                'page-attributes',
                'thumbnail'
            )
        )
    );

    register_post_type('videos',
        array(
            'labels' => array(
                'name' => __( 'Vídeos', 'boilerplate' ),
                'singular_name' => __('Vídeo', 'boilerplate' )
            ),
            'show_in_rest' => true,
            'public' => true,
            'hierarchical' => true,
            'has_archive' => 'videos',
//            'menu_icon' => 'dashicons-store',
            'menu_position' => 5,
            'rewrite' => array('slug' => 'videos'),
            'supports' => array(
                'title',
                'editor',
//                'page-attributes',
                'thumbnail'
            )
        )
    );

    register_post_type('cadastro',
        array(
            'labels' => array(
                'name' => __( 'Leads', 'boilerplate' ),
                'singular_name' => __('lead', 'boilerplate' )
            ),
            'show_in_rest' => true,
            'public' => true,
            'hierarchical' => true,
//            'has_archive' => 'videos',
//            'menu_icon' => 'dashicons-store',
            'menu_position' => 5,
//            'rewrite' => array('slug' => 'videos'),
            'supports' => array(
                'title',
//                'editor',
//                'page-attributes',
//                'thumbnail'
            )
        )
    );

//    register_taxonomy(
        //'categoria-lojas',
        //'lojas',
//        array(
//            'label' => __( 'Categorias Lojas', 'boilerplate' ),
//            'rewrite' => array( 'slug' => 'categoria-loja' ),
//            'hierarchical' => true,
//        )
//    );




}
