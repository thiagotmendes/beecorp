<?php
$relatedSolution = get_field('escolher_solucoes');
if(!empty($relatedSolution)):
?>
    <section class="main-section">
        <div class="container main-section__solucoes--relacionadas">
            <header class="text-center">
                <h5 class="main-title main-title__section main-title__section--blue">Soluções relacionadas</h5>
                <div class="main-title main-title__sub-title">Conheça outras soluções</div>
            </header>
            <div class="row">
		        <?php
		        foreach ($relatedSolution as $post): setup_postdata($post);
			        ?>
                    <div class="col-md-4 mt-3 mb-3">
                        <a href="" class="main-box__link">
                            <div class="main-box">
                                <div class="main-box__image">
                                    <img src="<?= get_field('icone_item') ?>" alt="">
                                </div>
                                <header>
                                    <h4 class="main-title main-title__solucoes"><?php the_title() ?></h4>
                                </header>
						        <?php the_excerpt_limit(10); ?>
                                <a href="<?php the_permalink(); ?>" class="btn main-btn">Acesse agora</a>
                            </div>
                        </a>
                    </div>
		        <?php
		        endforeach;
		        wp_reset_postdata($post);
		        ?>
            </div>
            <div class="text-center mt-5">
                <a href="<?= esc_url(home_url('nossas-solucoes')) ?>" class="main-btn btn">Conheça todas as nossas soluções</a>
            </div>
        </div>
    </section>
<?php
endif;