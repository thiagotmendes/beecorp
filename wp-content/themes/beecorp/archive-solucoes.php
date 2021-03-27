<?php get_header() ?>
    <section class="main-banner main-banner__interno" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/banner.png)">
        <header class="container main-banner__interno--container">
            <h1 class="main-title"> <?php the_archive_title() ?> </h1>
            <div class="main-banner__breadcrumb">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
				}
				?>
            </div>
        </header>
    </section>

    <section class="main-section main-section__search">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-search input-group mb-3">
                        <input type="text" class="form-control" placeholder="Pesquise por palavras chave    " aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn-forn_search" type="button">
                                <i class="icon icon-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section">
        <div class="container">
            <div class="">
                <nav class="main-menu__solution">
                    <!--                <a href="" class="btn main-btn main-btn__solution">Todos</a>-->
                    <a href="" class="btn main-btn main-btn__solution">Qualidade de vida</a>
                    <a href="" class="btn main-btn main-btn__solution">Saúde</a>
                    <a href="" class="btn main-btn main-btn__solution">Ergonomia</a>
                </nav>
            </div>

            <div class="">
				<?php get_template_part('parts/loop/loop-solucao') ?>
            </div>
            <!--        <div class="row mt-5">-->
            <!--            <div class="col-md-3 ">-->
            <!--                <h6 class="main-title main-title__section--blue mb-4">-->
            <!--                    Filtrar por categoria-->
            <!--                </h6>-->
            <!--                <select name="" id="" class="selectpicker">-->
            <!--                    --><?php
			//                    for ($i = 0; $i <5; $i++):
			//                        ?>
            <!--                        <option value="">Teste categoria</option>-->
            <!--                    --><?php
			//                    endfor;
			//                    ?>
            <!--                </select>-->
            <!--                <div class="mt-4">-->
            <!--                    --><?php
			//                    for ($i = 0; $i < 5; $i++):
			//                    ?>
            <!--                    <div class="">-->
            <!--                        <input type="checkbox"> Meu teste-->
            <!--                    </div>-->
            <!--                    --><?php
			//                    endfor;
			//                    ?>
            <!--                </div>-->
            <!--            </div>-->
            <!--            <div class="col-md-9 interno">-->
            <!--	            --><?php //get_template_part('parts/loop/loop-solucao') ?>
            <!--            </div>-->
            <!--        </div>-->

            <div class="text-center main-section__cta">
                <p class="">Quer descobrir a solução ideal para o seu negócio? </p>
                <a href="" class="btn main-btn">Conversar com um especialista</a>
            </div>
        </div>
    </section>
<?php get_footer() ?>