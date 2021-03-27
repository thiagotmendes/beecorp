<section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white">
	<div class="container">
		<header class="text-center">
			<h3 class="main-title main-title__section main-title__section--white"><?= get_field('titulo_da_sessao_beneficio') ?></h3>
			<div class="main-title main-title__sub-title main-title__section--white">
				<?= get_field('sub_titulo_beneficio') ?>
			</div>
		</header>

		<div class="row">
			<?php
			if(have_rows('topicos_beneficios')){
				while (have_rows('topicos_beneficios')){ the_row();
					?>
					<div class="col-md-4 mt-3 mb-3">
						<div class="main-box">
                            <div class="">
                                <div class="mb-2">
                                    <img src="<?= get_sub_field('icone_topicos') ?>" alt="" class="" width="30" >
                                </div>
                                <header>
                                    <h4 class="main-title main-title__section--orange"><?= get_sub_field('titulo_topico') ?></h4>
                                </header>
	                            <?= get_sub_field('descricao_topico') ?>
                            </div>
						</div>
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>