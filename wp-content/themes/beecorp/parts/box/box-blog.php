<div class="col-md-4 mt-3 mb-3">
	<div class="main-box--blog">
		<a href="<?php the_permalink(); ?>" class="">
			<div class="main-box--blog__image">
				<figure>
					<?php
					if(has_post_thumbnail()):
						?>
						<img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="img-fluid">
					<?php
					else:
						?>
						<img src="<?= get_template_directory_uri() ?>/screenshot.png" alt="<?= get_the_title() ?>" class="img-fluid">
					<?php
					endif;
					?>
				</figure>
			</div>
		</a>
		<div class="main-box--blog__description">
			<header class="main-box--blog__header">
				<h4 class="main-title main-title__blog">
					<?php the_title() ?>
					<div class="main-title__blog--small">
						<small class="main-title main-title__section--small">Autor: <?php the_author() ?></small>
						<small class="main-title main-title__section--small main-title__section--small--orange">
							<?php
							$currentTerm = get_the_terms( get_the_ID(), 'category' );
							foreach ($currentTerm as $actualTerm):
								echo "<span>". $actualTerm->name . "</span>";
							endforeach
							?>
						</small>
					</div>
				</h4>
			</header>
			<?php the_excerpt_limit(30); ?>
			<div class="main-box--blog__cta">
				<a href="<?php the_permalink(); ?>" class="main-box--blog__cta--link main-link">
					Leia mais <i class="icon icon-arrow-double"></i>
				</a>
			</div>
		</div>
	</div>
</div>