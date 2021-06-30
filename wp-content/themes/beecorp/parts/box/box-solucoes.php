<div class="col-md-3 mt-3 mb-3">
	<div class="main-box main-box__loop-blog">
		<div class="">
			<div class="main-box__image">
				<img src="<?= get_field('icone_item') ?>" alt="<?php get_the_title() ?>" width="50">
			</div>
			<header>
				<h4 class="main-title main-title__solucoes"><?php the_title() ?></h4>
			</header>
			<p>
				<?php the_excerpt_limit(10); ?>
			</p>
		</div>

		<a href="<?php the_permalink(); ?>" class="btn main-btn main-btn--white main-btn--white__solution">Acesse agora</a>
	</div>
</div>