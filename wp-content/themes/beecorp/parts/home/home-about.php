<section class="main-section main-section__about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
                <?php if(get_field('imagem_sobre', 'option')): ?>
				<div class="main-section__img">
					<img src="<?= get_field('imagem_sobre', 'option') ?>" alt=" <?= get_field('sub_titulo_sobre', 'option') ?>" class="img-fluid ">
				</div>
                <?php else:  ?>
                    <div class="main-section__img">
                        <img src="<?= get_template_directory_uri() ?>/screenshot.png" alt=" <?= get_field('sub_titulo_sobre', 'option') ?>" class="img-fluid ">
                    </div>
                <?php endif; ?>
			</div>
			<div class="col-md-6 main-section__about--text">
				<div class="">
					<header>
						<h2 class="main-title main-title__section main-title__section--blue">
							<?= get_field('titulo_sobre', 'option') ?>
						</h2>
						<span class="main-title main-title__sub-title">
                            <?= get_field('sub_titulo_sobre', 'option') ?>
                        </span>
					</header>
					<div class="">
                        <?= get_field('descricao_sobre', 'option') ?>
                    </div>
				</div>

				<div class="main-section__about--links">
                    <?php
                    if(have_rows('links_sobre', 'option')){
                        while (have_rows('links_sobre', 'option')){ the_row();
                            ?>
                            <div class="">
                                <a href="<?= get_sub_field('link') ?>" class="main-control__menu--link--about main-link">
                                    <span> <?= get_sub_field('titulo') ?></span>
                                    <?= get_sub_field('sub_titulo') ?>  <i class="icon icon-arrow-double"></i>
                                </a>
                            </div>
                            <?php
                        }
                    }
                    ?>
				</div>
			</div>
		</div>

        <div class="">
	        <?php get_template_part('parts/cta/cta-end-section', 'cta-end-section', array('section' => 'about')) ?>
        </div>

	</div>
</section>