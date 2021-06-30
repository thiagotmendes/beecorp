<?php if( get_field('titulo_cases_sucesso', 'option' ) ): ?>
<section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white main-section__background-efects--right">
	<div class="container">
		<header class="text-center">
			<h5 class="main-title main-title__section--white main-title__section">
                <?= get_field('titulo_cases_sucesso', 'option' ) ?>
            </h5>
			<div class="main-title main-title__sub-title main-title__sub-title--white"><?= get_field('sub_titulo_cases_sucesso', 'option' ) ?></div>
		</header>

        <!-- swiper-container -->
		<div class="projetos-slider swiper-container">
			<div class="swiper-wrapper">
				<?php get_template_part('parts/loop/loop-projetos-slider') ?>
			</div>
		</div>
        <div class="navgation-slider">
            <div class="btn-slider btn-slider__next">
                <i class="icon icon-left-solid"></i>
            </div>
            <div class="btn-slider btn-slider__prev">
                <i class="icon icon-right-solid"></i>
            </div>
        </div>

        <div class="text-center main-section__cta main-section__cta--blog mt-5">
			<?php
			if( get_field('titulo_cta_cliente_session', 'option') ):
				echo '<div>'.get_field('titulo_cta_cliente_session', 'option').' </div>';
			endif;
			if(get_field('link_cta_cliente_session', 'option')):
				echo '<div class="main-section__cta--link">';
				echo '<a href="'. get_field('link_cta_cliente_session', 'option') .'" class="main-link main-link__ctas main-link__ctas--blog">';
				echo get_field('texto_cta_cliente_session', 'option');
				echo "<i class='icon icon-arrow-double'></i>";
				echo '</a>';
				echo "</div>";
			endif;
			?>
        </div>

	</div>
</section>
<?php endif;