<?php /* Template name: Soluções */ ?>
<?php get_header() ?>
<section class="main-banner main-banner__interno" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/banner.png)">
    <header class="container main-banner__interno--container">
        <h1 class="main-title"><?php the_title() ?></h1>
        <div class="main-banner__breadcrumb">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
            }
            ?>
        </div>
    </header>
</section>
<section class="main-section">
    <div class="container">
        <header class="text-center">
            <h2 class="main-title main-title__section main-title__section--blue">
                Nossas soluções
                Nossas soluções
            </h2>
            <div class="main-title main-title__sub-title">
                Lorem ipsum dolor site amet intel
            </div>
        </header>
        <div class="">
            <nav class="main-menu__solution">
                <a href="" class="btn main-btn main-btn__solution">Todos</a>
                <a href="" class="btn main-btn main-btn__solution">Qualidade de vida</a>
                <a href="" class="btn main-btn main-btn__solution">Saúde</a>
                <a href="" class="btn main-btn main-btn__solution">Ergonomia</a>
            </nav>
        </div>
        <div class="">
            <?php get_template_part('parts/loop/loop-solucao') ?>
        </div>

        <div class="text-center main-section__cta">
            <p class="">Quer descobrir a solução ideal para o seu negócio? </p>
            <a href="" class="btn main-btn">Conversar com um especialista</a>
        </div>
    </div>
</section>
<?php get_footer() ?>