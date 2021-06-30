<div class="row mt-5">
	<?php
	if (have_posts()):
		while (have_posts()): the_post();
			get_template_part('parts/box/box-solucoes');
		endwhile;
	endif;
	wp_reset_postdata() ?>
</div>