<div class="row main-section__solucoes--items">
	<?php
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $termID = get_queried_object()->slug;
    $argSolucao = array(
        'post_type'      => 'solucoes',
        'paged'          => $paged
    );
    if(is_home()){
        $limitePadrão = (!get_field('quantidade_de_solucoes', 'option') || get_field('quantidade_de_solucoes', 'option') == 0)? 8 : get_field('quantidade_de_solucoes', 'option');

        $arrayPage = array(
            'posts_per_page'    => $limitePadrão,
            'orderby'   => 'title',
            'order'     => 'asc'
        );
    } else {
	    $arrayPage = array(
            'posts_per_page'    => 12,
            'orderby'   => 'title',
            'order'     => 'asc'
        );
    }

    $argSolucao = array_merge($argSolucao, $arrayPage);
    // verify if have some term id to merge arrays
    if(!empty($termID)){
        $arrayTerm = array(
	        'orderby'   => 'title',
            'order'     => 'asc',
            'tax_query' => array(
                array(
                    'taxonomy' => 'tax_solution',
                    'field'    => 'slug',
                    'terms'    => $termID,
                )
            )
        );
        $argSolucao = array_merge($argSolucao, $arrayTerm);
    }
    //
    $loopSolucao = get_posts($argSolucao);
	foreach ($loopSolucao as $post): setup_postdata($post);
		get_template_part('parts/box/box-solucoes');
	endforeach;
	wp_reset_postdata();
	?>
</div>