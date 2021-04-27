<div class="row mt-5">
	<?php
	$currentTerm = get_the_terms( get_the_ID(), 'category' );
	if (have_posts()):
	while (have_posts()): the_post();
		get_template_part('parts/box/box-blog');
	endwhile;
	endif;
	wp_reset_postdata() ?>
</div>