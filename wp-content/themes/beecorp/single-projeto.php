<?php
get_header();
if(have_posts()){
    while(have_posts()){ the_post();
        $clienteRelacionado = get_field('relacionar_cliente');
        get_template_part('parts/header/header-clientes', 'header-clientes', array('cliente', $clienteRelacionado) )
        ?>


        <section class="main-section main-section__interno  main-section__primeira-dobra main-section__single main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
            <div class="container main-section__single--first">
                <h2 class="main-title main-title__sub-title text-center">
                    Sobre o projeto
                </h2>
                <?php the_content(); ?>
            </div>
        </section>

        <!-- -->
        <div class="main-section main-section__interno main-section__blog main-section__background-efects main-section__background-efects--white main-section__background-efects--left">
            <div class="container">
                <h2 class="main-title main-title__sub-title main-title__sub-title--white">
                    Por que escolheram a BeeCorp
                </h2>
                <div class="main-title__section--white">
	                <?php the_field('por_que_escolheram_a_beecorp'); ?>
                </div>

            </div>
        </div>

        <div class="main-section main-section__interno main-section__background-efects main-section__background-efects--blue main-section__background-efects--right">
            <div class="container">
                <h2 class="main-title main-title__sub-title main-title__sub-title main-title--orange">
                    Solução
                </h2>
	            <?php the_field('solucao'); ?>
            </div>
        </div>
        <div class="main-section main-section__solucoes main-section__interno main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
            <div class="container">
                <h2 class="main-title main-title__section--orange">
                    Diferenciais
                </h2>
	            <?php the_field('diferenciais'); ?>
            </div>
        </div>
        <div class="main-section main-section__interno main-section__blog main-section__background-efects main-section__background-efects--white main-section__background-efects--right">
            <div class="container">
                <h2 class="main-title main-title__section--white">
                    Resultados
                </h2>
                <div class="main-title--white">
	                <?php the_field('resultados'); ?>
                </div>

            </div>
        </div>
        <!-- -->
        <section class="main-section main-section__single  main-section__interno">
            <div class="container main-section__background-efects main-section__background-efects--blue main-section__background-efects--right">

                <h2 class="main-title main-title__section--orange text-center">
                    Depoimento
                </h2>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="main-section__depoimentos__item">
                            <div class="main-section__depoimentos__item--description ">
                                <?= get_field('depoimento', $clienteRelacionado[0]->ID ) ?>
                            </div>
                            <div class="main-section__depoimentos__autor">
                                <h6>
                                    <?= get_field('profissional', $clienteRelacionado[0]->ID ) ?>
                                    <small><?= get_field('cargo', $clienteRelacionado[0]->ID ) ?></small>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        get_template_part('parts/loop/loop-solucao-relacionada');
        get_template_part('parts/loop/loop-blog-relacionado');
        get_template_part('parts/footer/footer-pre-footer-img');
    }
}
get_footer();
