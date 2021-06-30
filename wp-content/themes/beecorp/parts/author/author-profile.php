<section class="main-section main-section__block-author ">
	<div class="main-section__author container">
		<div class="row">
			<div class="col-md-10 offset-md-1">
				<div class="row">
					<div class="col-md-3">
						<?php
						if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE):
							echo '<div class="main-section__img-especial main-section__img-especial--left img-author">';
						    echo "<a href='" . get_author_posts_url(get_the_author_meta('ID')) . "'>";
							echo get_avatar(get_the_author_meta('ID'), 'full');
							echo "</a>";
							echo "</div>";
						endif;
						?>
					</div>
					<div class="col-md-9">
						<div class="main-title main-title__section main-title__section--white">Author</div>
						<h5 class="main-title main-title__sub-title main-title__sub-title--orange"><?php  the_author() ?></h5>
						<?php the_author_meta('description') ?>
						<div class="social-icons">
							<?php if(!empty(get_user_meta(get_the_author_meta('ID'),'facebook')[0])) { ?>
								<a href="<?= get_user_meta( get_the_author_meta('ID'),'facebook')[0]; ?>" target="_blank" id="facebook" class="social-icons__item">
                                    <i class="icon icon-facebook-square-brands"></i>
								</a>
							<?php } ?>
							<?php if(!empty(get_user_meta(get_the_author_meta('ID'),'linkedin')[0])) { ?>
								<a href="<?= get_user_meta( get_the_author_meta('ID'),'linkedin')[0]; ?>" target="_blank" id="linkedin" class="social-icons__item">
                                    <i class="icon icon-linkedin-brands"></i>
								</a>
							<?php } ?>
							<?php if(!empty(get_user_meta(get_the_author_meta('ID'),'instagram')[0])) { ?>
								<a href="<?= get_user_meta( get_the_author_meta('ID'),'instagram')[0]; ?>" target="_blank" id="instagram" class="social-icons__item">
                                    <i class="icon icon-instagram-square-brands"></i>
								</a>
							<?php } ?>
							<?php if(!empty(get_user_meta(get_the_author_meta('ID'),'twitter')[0])) { ?>
                                <a href="https://twitter.com/<?= get_user_meta( get_the_author_meta('ID'),'twitter')[0]; ?>" target="_blank" id="twitter" class="social-icons__item">
                                    <i class="icon icon-twitter-square-brands"></i>
                                </a>
							<?php } ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>