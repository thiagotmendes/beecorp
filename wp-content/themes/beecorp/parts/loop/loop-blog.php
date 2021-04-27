<div class="row mt-5">
	<?php
	$termID = get_queried_object()->slug;
	$argBlog = array(
		'post_type' => 'post',
		'posts_per_page' => 12
	);
	if(!empty($termID)){
		$arrayTerm = array(
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => $termID,
				)
			)
		);
		$argBlog = array_merge($argBlog, $arrayTerm);
	}
	$loopBlog = get_posts($argBlog);
	foreach ($loopBlog as $post): setup_postdata($post);
        get_template_part('parts/box/box-blog');
    endforeach;
    wp_reset_postdata();
    ?>
</div>