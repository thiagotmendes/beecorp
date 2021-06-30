<div class="row mt-5">
<?php
    if($args['pgauthor']){
        $authorPage = get_queried_object()->ID;
    }

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $termID = get_queried_object()->slug;
    if(is_home()){
        $postsPerPage = array('posts_per_page' => 3);
    } else {
        $postsPerPage = array('posts_per_page' => 12);
    }
    $argBlog = array(
        'post_type' => 'post',
        'paged'          => $paged
    );

    if(!empty($authorPage)){
        $author = array(
            'author' => $authorPage
        );
        $argBlog = array_merge($argBlog, $author);
    }

    if( !empty($termID) ){
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

    // Merge posts per page depends of the page
    $argBlog = array_merge($argBlog, $postsPerPage);

    $loopBlog = new WP_Query($argBlog);
    $maxPages = $loopBlog->max_num_pages;
    if($loopBlog->have_posts()){
        while ($loopBlog->have_posts()){ $loopBlog->the_post();
            get_template_part('parts/box/box-blog');
        }
    }

    wp_reset_postdata();
?>
</div>
<?php if(!is_home()): ?>
<div class="mt-5">
    <?= pagination($maxPages, 5) ?>
</div>
<?php endif ?>