<div class="row">
	<?php
	$argClientes = array(
		'post_type' => 'projeto',
		'posts_per_page' => 9
	);
	$loopProjeto = get_posts($argClientes);
	foreach($loopProjeto as $post):  setup_postdata($post)
		?>
		<div class="col-md-4 mt-3 mb-3">
			<div class="main-box">
				<div class="main-box__image main-box__image--cliente text-center">
					<img src="<?= get_template_directory_uri() ?>/assets/images/sendgrid.png" alt="">
				</div>
				<header>
					<h4 class="main-title main-title__solucoes"><?php the_title() ?></h4>
				</header>
				<p>
					<?php the_excerpt_limit(30); ?>
				</p>
				<a href="<?php the_permalink(); ?>" class="btn main-btn">Acesse agora</a>
			</div>
		</div>
	<?php
	endforeach;
	wp_reset_postdata();
	?>
</div>