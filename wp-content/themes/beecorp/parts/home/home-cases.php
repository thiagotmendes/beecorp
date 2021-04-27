<?php if( get_field('titulo_cases_sucesso', 'option' ) ): ?>
<section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white main-section__background-efects--left">
	<div class="container">
		<header class="text-center">
			<h5 class="main-title main-title__section--white main-title__section">
                <?= get_field('titulo_cases_sucesso', 'option' ) ?>
            </h5>
			<div class="main-title main-title__sub-title main-title__sub-title--white"><?= get_field('sub_titulo_cases_sucesso', 'option' ) ?></div>
		</header>

		<div class="projetos-slider swiper-container">
			<div class="swiper-wrapper">
				<?php get_template_part('parts/loop/loop-projetos-slider') ?>
			</div>
		</div>
	</div>
</section>
<?php endif;