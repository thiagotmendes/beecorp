<section class="main-section main-section__clientes main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
	<div class="container">
		<header class="text-center">
			<h5 class="main-title main-title__section main-title__section--blue"><?= get_field('titulo_clientes_home', 'option') ?></h5>
			<div class="main-title main-title__sub-title">
				<?= get_field('sub_titulo_clientes_home', 'option') ?>
			</div>
		</header>
		<div class="text-center">
			<?= get_field('descricao_clientes_home', 'option') ?>
		</div>
		<div class="slider-clientes main-section__clientes--slider swiper-container">
			<div class="swiper-wrapper">
                <?php get_template_part('parts/loop/loop-clientes-slider') ?>
			</div>
		</div>
		<?php get_template_part('parts/cta/cta-end-section', 'cta-end-section', array('section' => 'clientes')) ?>
	</div>
</section>