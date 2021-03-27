<section class="main-section main-section__single main-section__background-efects main-section__background-efects--blue">
	<div class="container ">

		<header class="text-center">
			<h3 class="main-title main-title__section main-title__section--blue"><?= get_field('titulo_sessao_depoimentos') ?></h3>
			<div class="main-title main-title__sub-title">
				<?= get_field('sub_titulo_depoimento') ?>
			</div>
		</header>

		<div class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<div class="main-section__depoimentos__item">
					<div class="main-section__depoimentos__item--description">
						<?= get_field('depoimento_consultoria' ) ?>
					</div>
					<div class="main-section__depoimentos__autor">
						<h6>
							<?= get_field('profissional_consultoria'  ) ?>
							<small><?= get_field('cargo'  ) ?></small>
						</h6>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>