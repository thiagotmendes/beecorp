<section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white">
	<div class="container">
		<header class="text-center">
			<h5 class="main-title main-title__section main-title__section--white">
				BLOG
			</h5>
			<div class="main-title__sub-title main-title__sub-title--white">
				Conhecimento para você <br>
				fazer a diferença
			</div>
		</header>
        <?php
        $argPosts = array(
            'post_type' => 'post',
            'posts_per_page'    => 3
        );
        $loopPosts = get_posts($argPosts);
        ?>
		<div class="row">
            <?php
            $count = 0;
            foreach ($loopPosts as $post): setup_postdata($post);
                if($count < 1):
                    $idPrincipal = get_the_ID();
                ?>
                <div class="col-md-6">
                    <div class="main-box main-box--blog">
                        <div class="">
	                        <?php
	                        if( has_post_thumbnail(get_the_ID()) ){
		                        echo '<img src=" ' .get_the_post_thumbnail_url() .'" alt="'. get_the_title() .'" class="img-fluid">';
	                        } else {
		                        echo '<img src="' .get_template_directory_uri() .'/screenshot.png" alt="'. get_the_title() .'" class="img-fluid">';
	                        }
	                        ?>
                        </div>
                        <div class="main-box__description">
                            <header>
                                <time>
	                                <?php the_time( 'l, F j, Y' ); ?>.
                                </time>
                                <h5 class="main-title main-title__section">
                                    <?php the_title() ?>
                                </h5>
                            </header>
                            <?php the_excerpt_limit(20); ?>
                            <a href="<?php the_permalink(); ?>" class="main-control__menu--link--about main-link">Leia Mais</a>
                        </div>
                    </div>
                </div>
                <?php
                endif;
            $count++;
            endforeach;

            ?>
			<div class="col-md-6 main-section__blog--posts">
				<?php
				foreach ($loopPosts as $post): setup_postdata($post);
				    if(get_the_ID() != $idPrincipal):
                        ?>
                        <div class="main-box main-box--blog">
                            <div class="main-box__description">
                                <div class="">
                                    <header>
                                        <time>
	                                        <?php the_time( 'l, F j, Y' ); ?>.
                                        </time>
                                        <h5 class="main-title main-title__section">
                                            <?php the_title() ?>
                                        </h5>
                                    </header>
                                    <p>
	                                    <?php the_excerpt_limit(40); ?>
                                    </p>
                                </div>
                                <div class="">
                                    <a href="<?= get_the_permalink() ?>" class="main-control__menu--link--about main-link">Leia Mais</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endif;
				endforeach;
				?>
			</div>
		</div>
	</div>
</section>
<?php wp_reset_postdata(); ?>