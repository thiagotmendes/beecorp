<?php get_header() ?>
<?php
if(have_posts()){
	while(have_posts()){ the_post();
	    $clienteRelacionado = get_field('relacionar_cliente');
		?>
		<section class="main-banner main-banner__single">
			<div class="main-banner__single--container">
				<div class="main-banner__single--container--col-1">
					<header>
						<div class="main-box__image main-box__image--cliente text-center">
							<img src="<?= get_the_post_thumbnail_url( $clienteRelacionado[0]->ID ) ?>" alt="" class="img-fluid">
						</div>
						<h1 class="main-title main-title__interno main-title--white">
							<?php the_title() ?>
						</h1>
						<a href="" class="main-btn btn main-btn--white">Solicitar uma proposta</a>
					</header>
				</div>
				<div class="main-banner__single--container--col-2">
					<?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
				</div>
			</div>
		</section>

		<section class="main-section main-section__single main-section__background-efects main-section__background-efects--blue">
			<div class="container main-section__single--first">
				<h2 class="main-title main-title__sub-title text-center">
					Sobre o projeto
				</h2>
				<?php the_content(); ?>
            </div>
        </section>

        <section class="main-section main-section__single ">
            <div class="container main-section__background-efects main-section__background-efects--blue">

                <h2 class="main-title main-title__section--orange text-center">
                    Depoimento
                </h2>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="main-section__depoimentos__item">
                            <div class="main-section__depoimentos__item--description">
                                <?= get_field('depoimento', $clienteRelacionado[0]->ID ) ?>
                            </div>
                            <div class="main-section__depoimentos__autor">
                                <h6>
	                                <?= get_field('profissional', $clienteRelacionado[0]->ID ) ?>
                                    <small><?= get_field('cargo', $clienteRelacionado[0]->ID ) ?></small>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php
		get_template_part('parts/loop/loop-solucao-relacionada');
		get_template_part('parts/loop/loop-blog-relacionado');
		get_template_part('parts/footer/footer-pre-footer-img');
	}
}
get_footer();
