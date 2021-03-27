<?php /* Template name: Soluções */ ?>
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

                    <a href="" class="btn main-btn main-btn__solution main-btn__solution--orange">Qualidade de vida</a>
                    <a href="" class="btn main-btn main-btn__solution main-btn__solution--orange">Saúde</a>
                    <a href="" class="btn main-btn main-btn__solution main-btn__solution--orange">Ergonomia</a>

                </nav>
            </div>

            <div class="">
				<?php get_template_part('parts/loop/loop-blog') ?>
            </div>

        </div>
    </section>
<?php get_footer() ?>