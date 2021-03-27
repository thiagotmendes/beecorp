<?php
add_action('init', 'create_posttype' );
function create_posttype(){
	// cria os post_type necessário
	register_post_type('solucoes',
	    array(
	        'labels' => array(
	            'name' => __( 'Soluções', 'boilerplate' ),
	            'singular_name' => __('Soluções', 'boilerplate' )
	        ),
	        'show_in_rest' => true,
	        'public' => true,
	        'hierarchical' => true,
	        'has_archive' => 'solucoes',
	        'menu_position' => 5,
	        'rewrite' => array('slug' => 'solucao'),
	        'supports' => array(
	            'title',
	            'editor',
	            'thumbnail',
	            'page-attributes'
	        )
	    )
	);

	register_taxonomy(
        'tax_solution',
	    'solucoes',
	    array(
	        'label' => __( 'Categorias Soluções', 'boilerplate' ),
	        'rewrite' => array( 'slug' => 'nossas-solucoes' ),
	        'hierarchical' => true,
	    )
	);

	// cria os post_type necessário
	register_post_type('projeto',
		array(
			'labels' => array(
				'name' => __( 'Projeto', 'boilerplate' ),
				'singular_name' => __('Projeto', 'boilerplate' )
			),
			'show_in_rest' => true,
			'public' => true,
			'hierarchical' => true,
			'has_archive' => 'projetos',
			'menu_position' => 5,
			'rewrite' => array('slug' => 'projetos'),
			'supports' => array(
				'title',
				'editor',
				'thumbnail',
				'page-attributes'
			)
		)
	);

	// cria os post_type necessário
	register_post_type('clientes',
		array(
			'labels' => array(
				'name' => __( 'Clientes', 'boilerplate' ),
				'singular_name' => __('Clientes', 'boilerplate' )
			),
			'show_in_rest' => true,
			'public' => true,
			'hierarchical' => true,
			'has_archive' => 'clientes',
			'menu_position' => 5,
			'rewrite' => array('slug' => 'clientes'),
			'supports' => array(
				'title',
//				'editor',
				'thumbnail',
				'page-attributes'
			)
		)
	);

	// cria os post_type necessário
	register_post_type('ebooks',
		array(
			'labels' => array(
				'name' => __( 'Ebooks', 'boilerplate' ),
				'singular_name' => __('Ebooks', 'boilerplate' )
			),
			'show_in_rest' => true,
			'public' => true,
			'hierarchical' => true,
			'has_archive' => 'materiais-ricos',
			'menu_position' => 5,
			'rewrite' => array('slug' => 'materiais-ricos'),
			'supports' => array(
				'title',
//				'editor',
				'thumbnail',
//				'page-attributes'
			)
		)
	);

	register_taxonomy(
		'tax_ebook',
		'ebooks',
		array(
			'label' => __( 'Categorias ebooks', 'boilerplate' ),
			'rewrite' => array( 'slug' => 'materiais-ricos' ),
			'hierarchical' => true,
		)
	);
}
