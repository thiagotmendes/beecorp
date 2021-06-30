<?php
if($args['session']){
	$swiperClass = 'swiper-slide';
}
?>
<div class="col-md-4 mt-3 mb-3 <?= $swiperClass ?>">
	<div class="main-box--blog">
		<div class="">
			<div class="main-box--blog--head">
				<div class="">
					<?php
					//					$currentTerm = get_the_terms( get_the_ID(), 'category' );
					$wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
					$wpseo_primary_term = $wpseo_primary_term->get_primary_term();
					$term = get_term( $wpseo_primary_term );
					//                    var_dump($term);
					if($term){
//						foreach ($currentTerm as $actualTerm):
						echo "<span class='main-box--blog--head__term'>". $term->name . "</span>";
//						endforeach;
					} else {
						echo get_post_type();
					}
					?>
				</div>
				<div class="main-box--blog--head--time">
					<time>
						<?php the_time('d/m/Y') ?>
					</time>
				</div>
			</div>
			<a href="<?php the_permalink(); ?>" class="">
				<div class="main-box--blog__image">
					<figure>
						<?php
						if(has_post_thumbnail()):
							?>
							<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="img-fluid">
						<?php
						else:
							?>
							<img src="<?= get_template_directory_uri() ?>/screenshot.png" alt="<?= get_the_title() ?>" class="img-fluid">
						<?php
						endif;
						?>
					</figure>
				</div>
			</a>
		</div>
		<div class="main-box--blog__description">
			<header class="main-box--blog__header">
				<h4 class="main-title main-title__blog">
					<?php the_title() ?>
					<small>
						<a href="<?=  get_author_posts_url(get_the_author_meta('ID')) ?>" class="">
							Por: <?php the_author() ?>
						</a>
					</small>
				</h4>
			</header>
			<div class="text-justify mt-2">
				<?php the_field( 'descricao_do_ebook');  ?>
			</div>
		</div>
		<div class="main-box--blog__description">
			<div class="main-box--blog__cta">
				<?php
				if(get_field('tipo_de_download_de_arquivo') == 'link'){
					?>
					<a href="<?= get_field('link_externo') ?>" target="_blank" class="btn main-btn">Baixar o Ebook</a>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>