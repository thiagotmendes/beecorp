<?php $ctaInfo = get_field('outros_itens_do_header') ?>
<section class="main-banner main-banner__single">
	<div class="main-banner__single--container">
		<div class="main-banner__single--container--col-1">
			<header>
				<h1 class="main-title main-title__interno main-title--white">
					<?php the_title() ?>
				</h1>
				<div class="main-title__description">
					<?= get_field('sub_titulo_header_pagina') ?>
				</div>
                <div class="">
					<?php
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
					}
					?>
                </div>
			</header>
		</div>
		<div class="main-banner__single--container--col-2">
			<?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
		</div>
	</div>
</section>