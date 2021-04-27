<?php
get_header();
	if(have_posts()){
		while (have_posts()){ the_post();
			?>
			<section class="main-banner main-banner__interno ">
				<header class="container main-banner__interno--container">
					<h1 class="main-title"><?php the_title() ?></h1>
                    <div class="main-banner__breadcrumb">
						<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
						}
						?>
                    </div>
                </header>
			</section>
            <section class="main-section main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
	                        <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>
			<?php
		}
	}
get_footer();
