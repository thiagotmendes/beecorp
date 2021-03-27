<?php get_header() ?>
<?php
if(have_posts()){
	while(have_posts()){ the_post();
		?>
		<section class="main-banner main-banner__single">
			<div class="main-banner__single--container">
				<div class="main-banner__single--container--col-1">
					<header>
						<h1 class="main-title main-title__interno main-title--white">
							<?php the_title() ?>
						</h1>
					</header>
				</div>
				<div class="main-banner__single--container--col-2">
					<?php
					if( has_post_thumbnail(get_the_ID()) ){
						echo '<img src=" ' .get_the_post_thumbnail_url() .'" alt="'. get_the_title() .'" class="img-fluid">';
					} else {
						echo '<img src="' .get_template_directory_uri() .'/screenshot.png" alt="'. get_the_title() .'" class="img-fluid">';
					}
					?>
				</div>
			</div>
		</section>
		<section class="main-section main-section__single ">
			<div class="container main-section__single--first">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
	                    <?php the_content(); ?>
                    </div>
                </div>

			</div>
		</section>
        <?php
        get_template_part('parts/loop/loop-solucao-relacionada');
        get_template_part('parts/loop/loop-blog-relacionado');
        get_template_part('parts/footer/footer-pre-footer-img');
	}
}
get_footer();
