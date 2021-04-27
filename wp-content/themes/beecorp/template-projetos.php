<?php /* Template name: Projetos */ ?>
<?php get_header() ?>

<section class="main-banner main-banner__interno" style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID()) ?>)">
	<header class="container main-banner__interno--container">
		<h1 class="main-title"><?php the_title() ?></h1>
		<div class="main-banner__breadcrumb">
			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
			}
			?>
		</div>
	</header>
</section>

<section class="main-section ">
	<div class="container">
		<header class="text-center">
			<h2 class="main-title main-title__section main-title__section--blue">Conheça nossos parceiros</h2>
			<div class="main-title main-title__sub-title">Alguns dos nossos projetos e <br> parcerias de sucesso</div>
		</header>

        <?php get_template_part('parts/loop/loop-projetos') ?>
	</div>
</section>

<?php get_footer() ?>
