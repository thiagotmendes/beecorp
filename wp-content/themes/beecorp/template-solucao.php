<?php /* Template name: Soluções */ ?>
<?php get_header() ?>
    <section class="main-banner main-banner__interno" style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID()) ?>)">
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

    <section class="main-section main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
        <div class="container">
            <div class="">
	            <?php get_template_part('parts/category-nav/category-solution') ?>
            </div>

            <div class="">
				<?php get_template_part('parts/loop/loop-solucao') ?>
                <div class="load_more"> </div>
                <div class="load_ring">
                    <div class="lds-ring"><div></div><div></div><div></div><div></div></div> Carregando
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="" class="btn main-btn main-btn__solution main-btn__solution--orange main-btn__load" data-page="2" data-post="solucoes">
                    Carregar mais
                </a>
            </div>

        </div>
    </section>
<?php get_footer() ?>