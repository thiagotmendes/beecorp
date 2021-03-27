<section class="main-section main-section__depoimentos main-section__background-efects main-section__background-efects--white">
	<div class="container">
		<header class="text-center">
			<h5 class="main-title main-title__section main-title__section--white">
				DEPOIMENTOS
			</h5>
			<div class="main-title main-title__sub-title main-title__sub-title--white">
				O que nossos clientes dizem
			</div>
		</header>
		<div class="slider-depoimentos main-section__depoimentos__slider swiper-container">
			<div class="swiper-wrapper">
				<?php for ($i = 0; $i < 10; $i++): ?>
					<div class="swiper-slide">
						<div class="row">
							<div class="col-md-6 align-self-center text-center">
								<img src="<?= get_template_directory_uri() ?>/assets/images/sendgrid.png" alt="">
							</div>
							<div class="col-md-6">
								<div class="main-section__depoimentos__item">
									<div class="main-section__depoimentos__item--description">
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem
										accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
										quae ab illo inventore veritatis et quasi architecto beatae vitae
										dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
										aspernatur aut odit aut fugit,
									</div>
									<div class="main-section__depoimentos__autor">
										<h6>
											Nilton Ferreira
											<small>Gerente Send Grid</small>
										</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</section>