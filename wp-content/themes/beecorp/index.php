<?php get_header() ?>
    <section class="main-banner">
        <div class="main-banner__principal" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/banner.png)">
            <div class="container">
                <h1 class="main-title main-title__banner">
                    Somos protagonistas <br>
                    quando o assunto <br>
                    é bem-estar.
                </h1>
                <a href="" class="btn main-btn" role="button">Solicite uma proposta</a>
            </div>
        </div>
    </section>

    <section class="main-control">
        <div class="container">
            <div class="main-control__menu">
                <a href="" class="main-control__menu--link">
                    <div class="main-control__menu--link--icon">
                        <i class="icon icon-life"></i>
                    </div>
                    <div class="">
                        <span>Qualidade de vida <i class="icon icon-arrow-double"></i></span>
                        Proin diam velit facilisis est
                    </div>
                </a>
                <a href="" class="main-control__menu--link">
                    <div class="main-control__menu--link--icon">
                        <i class="icon icon-helth"></i>
                    </div>
                    <div class="">
                        <span>Saúde <i class="icon icon-arrow-double"></i></span>
                        Ultrices nam malesuada nulla
                    </div>
                </a>
                <a href="" class="main-control__menu--link">
                    <div class="main-control__menu--link--icon">
                        <i class="icon icon-hands"></i>
                    </div>
                    <div class="">
                        <span>Ergonomia <i class="icon icon-arrow-double"></i></span>
                        Elementum morbi viverra nulla
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="main-section main-section__about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-section__img">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/about.png" alt="" class="img-fluid ">
                    </div>

                </div>
                <div class="col-md-6 main-section__about--text">
                    <div class="">
                        <header>
                            <h2 class="main-title main-title__section main-title__section--blue">
                                SOBRE NÓS
                            </h2>
                            <span class="main-title main-title__sub-title">
                                Transforme a sua empresa e faça a diferença!
                            </span>
                        </header>
                        <p>
                            Oferecemos uma gestão completa e integrada da saúde,
                            qualidade de vida e segurança, pois acreditamos que pessoas
                            felizes e saudáveis são mais produtivas e constroem organizações
                            melhores e mais eficientes. Atuamos em todo o Brasil e temos
                            escritórios nas principais cidades do país.
                        </p>
                    </div>
                    <div class="main-section__about--links">
                        <a href="" class="main-control__menu--link--about main-link">
                            <div class="">
                                <span> Gestão integrada </span>
                                Descubra  <i class="icon icon-arrow-double"></i>
                            </div>
                        </a>
                        <a href="" class="main-control__menu--link--about main-link">
                            <div class="">
                                <span> Atuação nacional </span>
                                Descubra  <i class="icon icon-arrow-double"></i>
                            </div>
                        </a>
                        <a href="" class="main-control__menu--link--about main-link">
                            <div class="">
                                <span> Gestão da saúde </span>
                                Descubra  <i class="icon icon-arrow-double"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section main-section__solucoes">
        <div class="container">
            <header class="text-center">
                <h3 class="main-title main-title__section main-title__section--blue">Soluções em destaque</h3>
                <span class="main-title main-title__sub-title">
                    Qualidade de Vida, Saúde e Ergonomia
                </span>
            </header>
            <div class="text-center">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br>
                tempor incididunt ut labore et dolore magna aliqua.
            </div>
            <?php get_template_part('parts/loop/loop-solucao') ?>
            <div class="text-center main-section__cta">
                <p class="">Quer descobrir a solução ideal para o seu negócio? </p>
                <a href="" class="btn main-btn">Conversar com um especialista</a>
            </div>
        </div>
    </section>

    <section class="main-section main-section__video">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="main-title main-title__section main-title__section--orange">
                        COMO FAZEMOS?
                    </h4>
                    <div class="main-title__sub-title main-title__sub-title--white">
                        Transformando pessoas <br> e negócios através do <br> bem-estar!
                    </div>
                </div>
                <div class="col-md-6 align-self-center text-center">
                    <a href="" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/video-play.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section main-section__blog">
        <div class="container">
            <header class="text-center">
                <h5 class="main-title main-title__section main-title__section--white">
                    BLOG
                </h5>
                <div class="main-title__sub-title">
                    Conhecimento para você <br>
                    fazer a diferença
                </div>
            </header>

            <div class="row">
                <div class="col-md-6">
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
                                        Dor de cabeça no trabalho: descubra os fators e como resolver
                                    </h5>
                                </header>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 main-section__blog--posts">
                    <?php
                    for ($i = 0; $i < 2; $i++):
                        ?>
                        <a href="" class="main-box__link">
                            <div class="main-box main-box--blog">
                                <div class="main-box__description">
                                    <header>
                                        <time>
                                            08 de Fevereiro de  2021
                                        </time>
                                        <h5 class="main-title main-title__section">
                                            Dor de cabeça no trabalho: descubra os fators e como resolver
                                        </h5>
                                    </header>
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore...
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php
                    endfor;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section main-section__clientes">
        <div class="container">
            <header class="text-center">
                <h5 class="main-title main-title__section main-title__section--blue">Nossos clientes</h5>
                <div class="main-title main-title__sub-title">
                    Parceiros nessa jornada
                </div>
            </header>
            <div class="text-center">
                Desenvolvemos soluções customizadas ao perfil dos colaboradores e do negócio. Esse é o <br>
                jeito BeeCorp de transformar pessoas e negócios através do bem-estar
            </div>
            <div class="slider-clientes main-section__clientes--slider swiper-container">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 10; $i++): ?>
                        <div class="swiper-slide main-section__clientes--slider--item">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/cliente1.png" alt="" class="">
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section main-section__depoimentos">
        <div class="container">
            <header class="text-center">
                <h5 class="main-title main-title__section main-title__section--white">
                    DEPOIMENTOS
                </h5>
                <div class="main-title main-title__sub-title">
                    O que nossos clientes dizem
                </div>
            </header>
            <div class="slider-depoimentos main-section__depoimentos__slider swiper-container">
                <div class="swiper-wrapper">
                    <?php for ($i = 0; $i < 10; $i++): ?>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-6 align-self-center text-center">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/sendgrid.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <div class="main-section__depoimentos__item">
                                        <div class="main-section__depoimentos__item--description">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                                            dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur aut odit aut fugit,
                                        </div>
                                        <div class="main-section__depoimentos__autor">
                                            <h6>
                                                Nilton Ferreira
                                                <small>Gerente Send Grid</small>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-section__img">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/img-prefooter.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 main-section__about--text">
                    <div class="">
                        <header>
                            <h6 class="main-title main-title__sub-title">
                                Preparado para transformar pessoas e negócios?
                            </h6>
                        </header>
                        <div class="mb-4">
                            O investimento em saúde, segurança e qualidade de vida impacta
                            diretamente nos resultados da sua organização.
                        </div>
                    </div>

                    <div class="">
                        <a href=""  class="btn main-btn">
                            Fale com nossos especialistas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>