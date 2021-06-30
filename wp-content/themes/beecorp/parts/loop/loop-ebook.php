<div class="row mt-5">
<?php
    $termID = get_queried_object()->slug;
    $argBlog = array(
        'post_type' => 'ebooks',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order'   => 'DESC',
    );
    if(!empty($termID)){
        $arrayTerm = array(
            'tax_query' => array(
                array(
                    'taxonomy' => 'tax_ebook',
                    'field'    => 'slug',
                    'terms'    => $termID,
                )
            )
        );
        $argBlog = array_merge($argBlog, $arrayTerm);
    }
    $loopBlog = get_posts($argBlog);
    foreach ($loopBlog as $post): setup_postdata($post);
//		$currentTerm = get_the_terms( get_the_ID(), 'tax_ebook' );
        get_template_part('parts/box/box-ebooks');
    endforeach;
    wp_reset_postdata()
?>
</div>