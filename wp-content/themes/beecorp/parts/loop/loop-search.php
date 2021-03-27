<div class="row mt-5">
	<?php
	if (have_posts()):
	while (have_posts()): the_post();
		$currentTerm = get_the_terms( get_the_ID(), 'category' );
		?>
		<div class="col-md-4 mt-3 mb-3">
			<a href="" class="main-box__link">
				<div class="main-box main-box--blog">
					<div class="main-box--blog__image">
						<?php
						if( has_post_thumbnail(get_the_ID()) ){
							echo '<img src=" ' .get_the_post_thumbnail_url() .'" alt="'. get_the_title() .'" class="img-fluid">';
						} else {
							echo '<img src="' .get_template_directory_uri() .'/screenshot.png" alt="'. get_the_title() .'" class="img-fluid">';
						}
						?>
					</div>
					<div class="main-box__description">
						<div class="">
							<header>
								<time>
									<?php the_time( 'l, F j, Y' ); ?>.
								</time>
								<h5 class="main-title main-title__section">
									<?php the_title() ?>
									<small class="main-title main-title__section--small">
										<?php
										foreach ($currentTerm as $actualTerm):
											echo $actualTerm->name;
										endforeach;
										?>
									</small>
								</h5>
							</header>

							<?php the_excerpt_limit(20); ?>
						</div>

						<a href="<?php the_permalink(); ?>" class="main-control__menu--link--about main-link">Leia Mais</a>
					</div>
				</div>
			</a>
		</div>
	<?php
	endwhile;
	endif;
	wp_reset_postdata(); ?>
</div>