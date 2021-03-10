<?php
get_header();
	if(have_posts()){
		while (have_posts()){ the_post();
			?>
			<section class="main-banner main-banner__interno">
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
            <section class="main-section">
                <div class="container">
                    <?php the_content(); ?>
                </div>
            </section>
			<?php
		}
	}
get_footer();
