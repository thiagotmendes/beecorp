<div class="row main-section__solucoes--items">
	<?php
    $termID = get_queried_object()->slug;
    $argSolucao = array(
        'post_type' => 'solucoes'
    );
    // verify if have some term id to merge arrays
    if(!empty($termID)){
        $arrayTerm = array(
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
		<div class="col-md-4 mt-3 mb-3">
            <div class="main-box">
                <div class="">
                    <div class="main-box__image">
                        <img src="<?= get_field('icone_item') ?>" alt="">
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