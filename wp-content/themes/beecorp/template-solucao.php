<?php /* Template name: Soluções */ ?>
<?php get_header() ?>
    <section class="main-banner main-banner__interno" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/banner.png)">
        <header class="container main-banner__interno--container">
            <h1 class="main-title"> <?php the_title() ?> </h1>
            <div class="main-banner__breadcrumb">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
				}
				?>
            </div>
        </header>
    </section>

    <?php get_template_part('parts/forms/form-search-solucao') ?>

    <section class="main-section main-section__background-efects main-section__background-efects--blue">
        <div class="container">
            <header class="text-center mb-5">
                <h2 class="main-title main-title__section main-title__section--blue"><?= get_field('titulo_header_pagina', get_the_ID() ) ?></h2>
                <div class="main-title main-title__sub-title"><?= get_field('sub_titulo_header_pagina', get_the_ID() ) ?></div>
            </header>

            <div class="">
	            <?php get_template_part('parts/category-nav/category-solution') ?>
            </div>

            <div class="main-section__background-efects main-section__background-efects--blue">
				<?php get_template_part('parts/loop/loop-solucao') ?>
            </div>

            <div class="text-center main-section__cta">
                <p class="">Quer descobrir a solução ideal para o seu negócio? </p>
                <a href="" class="btn main-btn">Conversar com um especialista</a>
            </div>
        </div>
    </section>
<?php get_footer() ?>