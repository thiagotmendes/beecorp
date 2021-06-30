<nav class="main-menu__solution">
    <?php
    if( is_page_template( 'template-blog.php' ) ):
        $activeBlog = "main-btn__solution--orange--active";
    endif;
    ?>
    <a href="<?= esc_url(home_url('blog')) ?>" class="btn main-btn main-btn__solution main-btn__solution--orange <?= $activeBlog ?>">
        Todos
    </a>
    <?php
    $termId = get_queried_object()->term_id;
    $argTerms = array(
        'taxonomy' => 'category',
        'hide_empty' => true,
    );
    $terms = get_terms($argTerms);
    foreach ($terms as $term):
        if( $term->term_id == $termId ):
            $classActive = "main-btn__solution--orange--active";
        else:
            $classActive = "";
        endif
        ?>
        <a href="<?= get_term_link($term) ?>" class="btn main-btn main-btn__solution main-btn__solution--orange <?= $classActive ?>">
            <?= $term->name ?>
        </a>
    <?php
    endforeach
    ?>
</nav>