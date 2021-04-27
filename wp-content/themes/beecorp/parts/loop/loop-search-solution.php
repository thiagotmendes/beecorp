<div class="row mt-5">
	<?php
	if (have_posts()):
		while (have_posts()): the_post();
			$currentTerm = get_the_terms( get_the_ID(), 'category' )
			?>
			<div class="col-md-4 mt-3 mb-3">
				<div class="main-box">
					<div class="">
						<div class="main-box__image">
							<img src="<?= get_field('icone_item') ?>" alt="">
						</div>
						<header>
							<h4 class="main-title main-title__solucoes"><?php the_title() ?></h4>
						</header>
						<p>
							<?php the_excerpt_limit(10) ?>
						</p>
					</div>

					<a href="<?php the_permalink() ?>" class="btn main-btn main-btn--white main-btn--white__solution">Acesse agora</a>
				</div>
			</div>
		<?php
		endwhile;
	endif;
	wp_reset_postdata() ?>
</div>