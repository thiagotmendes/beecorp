<?php if(get_field('titulo_escopo')): ?>
<section class="main-section main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
	<div class="container">
		<header class="text-center">
			<h3 class="main-title main-title__section main-title__section--blue"><?= get_field('titulo_escopo') ?></h3>
			<div class="main-title main-title__sub-title">
				<?= get_field('sub_titulo_escopo') ?>
			</div>
		</header>

        <div class="mb-5">
	        <?= get_field('descricao_escopo') ?>
        </div>

		<?php
		if(get_field('tipo_de_bloco') == 'texto') {
			if(have_rows('adicionar_item')){
				echo '<div id="animateEscopo" class="main-animation">';
				$my_fields = get_field_object('adicionar_item');
				$count = (count($my_fields['value']));
				$maxWidth = ($count > 4) ? 'max-width: 20%' : '';
				$delayAnimate = "0.5";
				while(have_rows('adicionar_item')){ the_row();
					?>
					<div class="mt-3 mb-3 main-animation__col main-anim wow fadeInDown" style="<?= $maxWidth ?>" data-wow-duration="2s" data-wow-delay="<?= $resultDelayAnimate ?>s">
                        <h6 class="main-animation__col__col-title"><?= get_sub_field('titulo_step_escopo') ?></h6>
                        <div class="main-animation__col__description">
	                        <?= get_sub_field('descricao_step_escopo') ?>
                        </div>
					</div>
					<?php
                    $resultDelayAnimate = (float) $resultDelayAnimate + (float) $delayAnimate;
				}
				echo "</div>";
			}
		} else {
			echo "<img src='".get_field('fluxo_de_escopo')."' class='img-fluid'>";
		}
		?>
	</div>
</section>
<?php endif;