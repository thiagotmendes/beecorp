<div class="row mt-5">
	<?php
	$currentTerm = get_the_terms( get_the_ID(), 'category' );

	$argSearch = array(
	   's' => get_search_query(),
        'posts_per_page'    => 12
    );
	$loopSearch = new WP_Query($argSearch);

	if ($loopSearch->have_posts()):
	while ($loopSearch->have_posts()): $loopSearch->the_post();
		get_template_part('parts/box/box-blog');
	endwhile;
	endif;
	wp_reset_postdata() ?>
</div>
<div class="mt-5 justify-content-center text-center">
	<?= pagination($maxPages, 5) ?>
</div>