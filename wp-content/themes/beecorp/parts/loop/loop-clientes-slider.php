<?php
$argClientes = array(
    'post_type' => 'clientes',
    'posts_per_page' => -1
);
$loopClientes = get_posts($argClientes);
foreach ($loopClientes as $post): setup_postdata($post)
    ?>
    <div class="swiper-slide main-section__clientes--slider--item">
        <img src="<?= get_the_post_thumbnail_url(get_the_ID()) ?>" alt="<?= get_the_title() ?>" class="img-fluid">
    </div>
    <?php
endforeach;
wp_reset_postdata();