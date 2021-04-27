<?php if(get_field('titulo_video_home', 'option')): ?>
<section class="main-section main-section__video">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="main-title main-title__section main-title__section--orange">
					<?= get_field('titulo_video_home', 'option') ?>
				</h4>
				<div class="main-title__sub-title main-title__sub-title--white">
					<?= get_field('sub_titulo_home', 'option') ?>
				</div>
			</div>
			<div class="col-md-6 align-self-center text-center">
				<a href="" class="open-modal" data-modal="video">
					<img src="<?= get_template_directory_uri() ?>/assets/images/video-play.png" alt="">
				</a>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('parts/modal/modal-video') ?>
<?php endif;
