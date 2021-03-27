<?php get_header() ?>
<?php
if(have_posts()){
	while(have_posts()){ the_post();
		?>
		<section class="main-banner main-banner__single">
			<div class="main-banner__single--container">
				<div class="main-banner__single--container--col-1">
					<header>
						<div class="main-box__image main-box__image--cliente text-center">
							<img src="<?= get_template_directory_uri() ?>/assets/images/sendgrid.png" alt="">
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

		<section class="main-section main-section__single ">
			<div class="container main-section__single--first">
				<h2 class="main-title main-title__sub-title text-center">
					Sobre o projeto
				</h2>
				<p>
					A Reflexologia é uma técnica específica de pressão que atua em pontos reflexos
					precisos dos pés com base na teoria de que as áreas reflexas correspondem a todas
					as partes do corpo. Ela impacta diretamente no equilíbrio da energia e evita o surgimento
					de doenças e problemas de saúde.
				</p>

				<p>
					Entre outros benefícios, a reflexologia proporciona o bem-estar através de teorias holísticas.
					O termo “holístico” é derivado da palavra grega holos, que significa “inteiro” e, assim,
					procura tratar o indivíduo como um todo, constituído de corpo, mente e alma.
				</p>

				<p>
					Não deve ser confundida com a massagem básica dos pés ou com a massagem corporal. Cada parte do
					corpo e cada função orgânica possui seu ponto reflexo correspondente nos pés.
				</p>
			</div>
		</section>

		<?php
		get_template_part('parts/loop/loop-solucao-relacionada');
		get_template_part('parts/loop/loop-blog-relacionado');
		get_template_part('parts/footer/footer-pre-footer-img');
	}
}
get_footer();
