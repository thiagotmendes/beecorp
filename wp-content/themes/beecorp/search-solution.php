<?php get_header() ?>
	<section class="main-banner main-banner__interno" >
		<header class="container main-banner__interno--container">
			<h1 class="main-title"> Resultado: <?php echo get_search_query(); ?> </h1>
			<div class="main-banner__breadcrumb">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
				}
				?>
			</div>
		</header>
	</section>

    <?php get_template_part('parts/forms/form-search-solucao') ?>`

	<section class="main-section main-section__background-efects main-section__background-efects--blue main-section__background-efects--right">
		<div class="container">
			<div class="">
				<?php get_template_part('parts/category-nav/category-solution') ?>
			</div>
			<div class="">
				<?php get_template_part('parts/loop/loop-search-solution') ?>
			</div>
		</div>
	</section>
<?php get_footer() ?>