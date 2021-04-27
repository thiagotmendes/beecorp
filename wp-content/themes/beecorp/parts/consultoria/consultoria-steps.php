<?php if(get_field('titulo_escopo')): ?>
<section class="main-section main-section__single main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
	<div class="container">
		<header class="text-center">
			<h3 class="main-title main-title__section main-title__section--blue"><?= get_field('titulo_escopo') ?></h3>
			<div class="main-title main-title__sub-title">
				<?= get_field('sub_titulo_escopo') ?>
			</div>
		</header>

		<?php
		if(get_field('tipo_de_bloco') == 'texto') {
			if(have_rows('steps_add')){
				echo '<div id="animateEscopo" class="main-animation">';
				$delayAnimate = "0.5";
				while(have_rows('steps_add')){ the_row();
					?>
					<div class="wow fadeInDown" data-wow-duration="2s" data-wow-delay="<?= $resultDelayAnimate ?>s">
						<div class="text-center mb-3">
							<img src="<?= get_sub_field('icone') ?>" alt="">
						</div>
						<h6 class="main-animation__col__col-title text-center"><?= get_sub_field('titulo_step') ?></h6>
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