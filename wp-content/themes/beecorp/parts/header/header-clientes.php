<section class="main-banner main-banner__single">
	<div class="main-banner__single--container">
		<div class="main-banner__single--container--col-1">
			<header>
				<div class="main-box__image main-box__image--cliente--interno">
					<img src="<?= get_the_post_thumbnail_url( $args[1][0]->ID ) ?>" alt="" class="img-fluid">
				</div>
				<h1 class="main-title main-title__interno main-title--white">
					<?php the_title() ?>
				</h1>
				<div class="">
					<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
					}
					?>
				</div>
				<a href="" data-modal="consultor" class="main-btn btn main-btn--white mt-4 open-modal">Solicitar uma proposta</a>
			</header>
		</div>
		<div class="main-banner__single--container--col-2 ">
			<?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
		</div>
	</div>
</section>