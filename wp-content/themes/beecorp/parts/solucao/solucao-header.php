<?php $ctaInfo = get_field('outros_itens_do_header') ?>
<section class="main-banner main-banner__single">
	<div class="main-banner__single--container">
		<div class="main-banner__single--container--col-1">
			<header>
				<h1 class="main-title main-title__interno main-title--white">
					<?php the_title() ?>
				</h1>
				<div class="main-title__description">
					<?= get_field('descricao_header') ?>
				</div>
				<?php if($ctaInfo['texto_cta']): ?>
				<?php
					$linkCta = ($ctaInfo['interno'] == 'interno') ? $ctaInfo['link_interno'] : $ctaInfo['link_externo'];
					$target = ($ctaInfo['interno'] == 'interno') ? "_self" : "_blank";
				?>
				<a href="<?= $linkCta ?>" class="main-btn btn main-btn--white" target="<?= $target ?>">
					<?= $ctaInfo['texto_cta'] ?>
				</a>
				<?php endif; ?>
			</header>
		</div>
		<div class="main-banner__single--container--col-2">
			<?php the_post_thumbnail('full', array('class' => 'img-fluid')) ?>
		</div>
	</div>
</section>