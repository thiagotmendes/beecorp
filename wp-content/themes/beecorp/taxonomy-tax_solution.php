<?php /* Template name: Soluções */ ?>
<?php
$termTitle = get_queried_object()->name;
$termId = get_queried_object()->term_id;
get_header();
?>
	<section class="main-banner main-banner__interno" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/banner.png)">
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

	<section class="main-section main-section__search">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="form-search input-group mb-3">
						<input type="text" class="form-control" placeholder="Pesquise por palavras chave    " aria-label="Recipient's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn-forn_search" type="button">
								<i class="icon icon-search"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="main-section">
		<div class="container">
			<header class="text-center mb-5">
				<h2 class="main-title main-title__section main-title__section--blue">Conheça nossos parceiros</h2>
				<div class="main-title main-title__sub-title">Alguns dos nossos projetos e <br> parcerias de sucesso</div>
			</header>

			<div class="">
				<nav class="main-menu__solution">
					<?php
					$argTerms = array(
						'taxonomy' => 'tax_solution',
						'hide_empty' => false,
					);
					$terms = get_terms($argTerms);
					foreach ($terms as $term):
                        if( $term->term_id == $termId ):
                            $classActive = "main-btn__solution--orange--active";
                        else:
	                        $classActive = "";
                        endif
						?>
						<a href="<?= get_term_link($term) ?>" class="btn main-btn main-btn__solution main-btn__solution--orange <?= $classActive ?>">
							<?= $term->name ?>
						</a>
					<?php
					endforeach;
					?>
				</nav>
			</div>

			<div class="">
				<?php get_template_part('parts/loop/loop-solucao') ?>
			</div>

			<div class="text-center main-section__cta">
				<p class="">Quer descobrir a solução ideal para o seu negócio? </p>
				<a href="" class="btn main-btn">Conversar com um especialista</a>
			</div>
		</div>
	</section>
<?php get_footer() ?>