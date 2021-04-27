<div class="row main-section__solucoes--items">
	<?php
    $termID = get_queried_object()->slug;
    $argSolucao = array(
        'post_type'         => 'solucoes',

    );
    if(is_home()){
        $limitePadrão = (!get_field('quantidade_de_solucoes', 'option') || get_field('quantidade_de_solucoes', 'option') == 0)? 8 : get_field('quantidade_de_solucoes', 'option');

        $arrayPage = array(
            'posts_per_page'    => $limitePadrão,
            'orderby'   => 'rand'
        );
    } else {
	    $arrayPage = array(
            'posts_per_page'    => 12,
            'orderby'   => 'rand'
        );
    }

//    echo get_field('quantidade_de_solucoes', 'option');
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
		?>
		<div class="col-md-3 mt-3 mb-3">
            <div class="main-box main-box__loop-blog">
                <div class="">
                    <div class="main-box__image">
                        <img src="<?= get_field('icone_item') ?>" alt="<?php get_the_title() ?>" width="50">
                    </div>
                    <header>
                        <h4 class="main-title main-title__solucoes"><?php the_title() ?></h4>
                    </header>
                    <p>
		                <?php the_excerpt_limit(10); ?>
                    </p>
                </div>

                <a href="<?php the_permalink(); ?>" class="btn main-btn main-btn--white main-btn--white__solution">Acesse agora</a>
            </div>
		</div>
	    <?php
	endforeach;
	wp_reset_postdata();
	?>
</div>