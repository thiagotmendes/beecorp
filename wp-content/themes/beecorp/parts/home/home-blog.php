<section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white main-section__background-efects--right">
	<div class="container">
		<header class="text-center">
			<h5 class="main-title main-title__section main-title__section--white">
				<?= get_field('titulo_blog_home', 'option') ?>
			</h5>
			<div class="main-title__sub-title main-title__sub-title--white">
				<?= get_field('sub_titulo_blog_home', 'option') ?>
			</div>
		</header>
		<?php get_template_part('parts/loop/loop-blog') ?>
        <?php if( !empty(get_field('titulo_cta_blog', 'option')) ): ?>
            <div class="text-center main-section__cta main-section__cta--blog mt-5">
                <div> <?= get_field('titulo_cta_blog', 'option') ?> </div>
                <div class="cta_blog">
                    <a href="<?= esc_url(home_url('blog')) ?>" class="main-link main-link__ctas main-link__ctas--blog"> <?= get_field('texto_cta_blog', 'option') ?> <i class="icon icon-arrow-double"></i> </a>
                </div>
            </div>
        <?php endif; ?>
	</div>
</section>