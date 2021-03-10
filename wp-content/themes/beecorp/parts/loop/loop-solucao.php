<div class="row main-section__solucoes--items">
	<?php
	for ($i = 0; $i < 9; $i++):
		?>
		<div class="col-md-4">
			<a href="" class="main-box__link">
				<div class="main-box">
					<div class="main-box__image">
						<img src="<?= get_template_directory_uri() ?>/assets/images/1.png" alt="">
					</div>
					<header>
						<h4 class="main-title main-title__solucoes">Ginástica laboral</h4>
					</header>
					<p>
						Exercícios leves realizado pelos
						colaboradores de uma empresa durante o expediente de trabalho.
					</p>
				</div>
			</a>
		</div>
	<?php
	endfor;
	?>
</div>