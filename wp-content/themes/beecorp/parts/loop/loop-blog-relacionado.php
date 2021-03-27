<?php $blogRelacionado = get_field('escolher_conteudos');
if($blogRelacionado):
?>
    <section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white">
        <div class="container">
            <header class="text-center">
                <h5 class="main-title main-title__section--white main-title__section">Conteúdos relacionados</h5>
                <div class="main-title main-title__sub-title">Confira nossos materiais sobre <br> saúde mental</div>
            </header>
            <div class="row">
		        <?php
		        foreach ($blogRelacionado as $post): setup_postdata($post);
			        ?>
                    <div class="col-md-4 mt-3 mb-3">
                        <a href="" class="main-box__link">
                            <div class="main-box main-box--blog">
                                <div class="">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/blog1.png" alt="" class="img-fluid">
                                </div>
                                <div class="main-box__description">
                                    <header>
                                        <time>
                                            08 de Fevereiro de  2021
                                        </time>
                                        <h5 class="main-title main-title__section">
									        <?php the_title() ?>
                                        </h5>
                                    </header>
							        <?php the_excerpt_limit(20); ?>

                                    <a href="" class="main-control__menu--link--about main-link">Leia Mais</a>
                                </div>
                            </div>
                        </a>
                    </div>
		        <?php endforeach; ?>
		        <?php wp_reset_postdata($post); ?>
            </div>
        </div>
    </section>
<?php
endif;