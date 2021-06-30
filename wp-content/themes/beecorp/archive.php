<?php
$termTitle = get_queried_object()->name;
$termId = get_queried_object()->term_id;
get_header();
?>
	<section class="main-banner main-banner__interno" >
		<header class="container main-banner__interno--container">
			<h1 class="main-title"> <?= $termTitle ?> </h1>
			<div class="main-banner__breadcrumb">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
				}
				?>
			</div>
		</header>
	</section>

    <?= get_template_part('parts/forms/form-search-blog') ?>

	<section class="main-section">
		<div class="container">
<!--			<header class="text-center mb-5">-->
<!--				<h2 class="main-title main-title__section main-title__section--blue">Conheça nossos parceiros</h2>-->
<!--				<div class="main-title main-title__sub-title">Alguns dos nossos projetos e <br> parcerias de sucesso</div>-->
<!--			</header>-->

			<div class="">
				<?php get_template_part('parts/category-nav/category-blog') ?>
			</div>

			<div class="">
				<?php get_template_part('parts/loop/loop-blog') ?>
			</div>
			<?php get_template_part('parts/cta/cta-end-section', 'cta-end-section', array('section' => 'blog')) ?>
<!--			<div class="text-center main-section__cta">-->
<!--				<p class="">Quer descobrir a solução ideal para o seu negócio? </p>-->
<!--				<a href="" class="btn main-btn">Conversar com um especialista</a>-->
<!--			</div>-->
		</div>
	</section>
<?php get_footer() ?>