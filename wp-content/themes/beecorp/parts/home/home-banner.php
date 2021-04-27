<section class="main-banner banner-slider swiper-container">
    <div class="swiper-wrapper">
	    <?php
	    if(have_rows('banner_principal', 'option')):
		    while(have_rows('banner_principal', 'option')): the_row();
			    // background-image: url(<?= get_sub_field('imagem_banner')
			    ?>
                <div class="main-banner__principal swiper-slide" style="">
                    <div class="img-picture">
					    <?php
					    if(get_sub_field('tipo_de_banner') == 'video'):
//                        $urlVideo = get_sub_field('url_do_video');
//                        var_dump($urlVideo);
						    // Load value.
						    $iframe = get_sub_field('url_do_video');

						    // Use preg_match to find iframe src.
						    preg_match('/src="(.+?)"/', $iframe, $matches);
						    $src = $matches[1];
						    $getYoutubeId = explode('?', $matches[1]);
						    $youtubeId = explode('/', $getYoutubeId[0]);
						    // Add extra parameters to src and replcae HTML.
						    $params = array(
							    'controls'  => 0,
							    'hd'        => 1,
							    'autohide'  => 1,
							    'disablekb' => 0,
							    'autoplay'  => 1,
							    'loop'      => 1,
							    'mute'      => 1,
							    'playlist'  => $youtubeId[4]
						    );
						    $new_src = add_query_arg($params, $src);
						    $iframe = str_replace($src, $new_src, $iframe);

						    // Add extra attributes to iframe HTML.
						    $attributes = 'frameborder="0"';
						    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

						    // Display customized HTML.
						    echo '<div class="embed-container">';
						    echo $iframe;
						    echo '</div>'
						    ?>
                            <!--                        <iframe id="ytplayer" type="text/html" width="100%" height="100%"-->
                            <!--                            src="https://www.youtube.com/embed/brmghPp7iOQ?autoplay=1&disablekb=1&loop=1&controls=0&rel=0&playlist=brmghPp7iOQ&mute=1"-->
                            <!--                            frameborder="0" allowfullscreen>-->
					    <?php
					    else:
						    ?>
                            <picture>
                                <source media="(max-width: 799px)" srcset="<?= get_sub_field('imagem_mobile') ?>">
                                <source media="(min-width: 800px)" srcset="<?= get_sub_field('imagem_banner') ?>">
                                <img src="<?= get_sub_field('imagem_mobile') ?>" alt="<?= htmlentities(get_sub_field('titulo_banner'))  ?>">
                            </picture>
					    <?php
					    endif;
					    ?>


                    </div>
                    <div class="container">
                        <h1 class="main-title main-title__banner">
						    <?= get_sub_field('titulo_banner') ?>
                        </h1>
					    <?php if(get_sub_field('link_cta')): ?>
                            <a href="<?= get_sub_field('link_cta') ?>" class="btn main-btn" role="button"><?= get_sub_field('cta') ?></a>
					    <?php endif; ?>
                    </div>
                </div>
		    <?php
		    endwhile;
	    endif;
	    ?>
    </div>
</section>