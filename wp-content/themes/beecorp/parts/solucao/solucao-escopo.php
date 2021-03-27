<section class="main-section">
	<div class="container">
		<header class="text-center">
			<h3 class="main-title main-title__section main-title__section--blue"><?= get_field('titulo_escopo') ?></h3>
			<div class="main-title main-title__sub-title">
				<?= get_field('sub_titulo_escopo') ?>
			</div>
		</header>

		<?php
		if(get_field('tipo_de_bloco') == 'texto') {
			if(have_rows('adicionar_item')){
				echo '<div id="animateEscopo" class="main-animation">';
				$delayAnimate = "0.5";
				while(have_rows('adicionar_item')){ the_row();
					?>
					<div class="main-animation__col main-anim wow fadeInDown" data-wow-duration="2s" data-wow-delay="<?= $resultDelayAnimate ?>s">
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