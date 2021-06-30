<?php
/* Template name: Fale conosco */
get_header();
if(have_posts()):
    while (have_posts()): the_post();
?>
    <section class="main-banner main-banner__interno" style="background-image: url(<?= get_the_post_thumbnail_url(get_the_ID()) ?>)">
        <header class="container main-banner__interno--container">
            <h1 class="main-title"> <?php the_title() ?> </h1>
            <div class="main-banner__breadcrumb">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
                }
                ?>
            </div>
        </header>
    </section>

    <section class="main-section main-section__background-efects main-section__background-efects--blue main-section__background-efects--right">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <!-- -->
                    <div class="main-box mb-3">
                        <div class="">
                            <div class="main-box__icons">
                                <i class="icon icon-comments-solid"></i>
                            </div>

                            <h5 class="main-title">
                                Solicite agora uma proposta!
                            </h5>
                            <div class="">
                                Potencialize seus resultados e transforme o seu negócio através do bem-estar.
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="<?= esc_url(home_url('contato/proposta')) ?>" class="btn main-btn">
                                Enviar informações
                            </a>
                        </div>
                    </div>
                    <!-- -->
                </div>
                <div class="col-md-4">
                    <!-- -->
                    <div class="main-box mb-3">
                        <div class="">
                            <div class="main-box__icons">
                                <i class="icon icon-calendar-alt-solid"></i>
                            </div>

                            <h5 class="main-title">
                                Agende uma consultoria gratuita!
                            </h5>
                            <div class="">
                                Fale agora com um de nossos especialistas e descubra a solução ideal.
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="<?= esc_url(home_url('consultoria-gratuita')) ?>" class="btn main-btn">
                                Agendar horário
                            </a>
                        </div>
                    </div>
                    <!-- -->
                </div>
                <div class="col-md-4">
                    <!-- -->
                    <div class="main-box mb-3">
                        <div class="">
                            <div class="main-box__icons">
                                <i class="icon icon-handshake-solid"></i>
                            </div>

                            <h5 class="main-title">
                                Faça parte da nossa equipe!
                            </h5>
                            <div class="">
                                Junte-se a uma equipe multidisciplinar para multiplicar o bem-estar pelo Brasil.
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSc9Rmh8f1kUnDIneYssScVkPNIVvNyqC1akDlJ4FwFpSLWbag/viewform" target="_blank" class="btn main-btn">
                                Cadastrar currículo
                            </a>
                        </div>
                    </div>
                    <!-- -->
                </div>
            </div>
            <div class="row mt-4">
                <!-- -->
                <div class="col-md-6">
                    <div class="main-box">
                        <div class="">
                            <div class="main-box__icons">
                                <i class="icon icon-headphones-user"></i>
                            </div>

                            <h5 class="main-title">
                                Belo Horizonte
                            </h5>
                            <div class="">
                                R. Ant. de Albuquerque, 194 <br>
                                Funcionários
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="main-title">(31) 3318-0070</h5>
                        </div>
                    </div>
                </div>
                <!-- -->
                <!-- -->
                <div class="col-md-6">
                    <div class="main-box">
                        <div class="">
                            <div class="main-box__icons">
                                <i class="icon icon-headphones-user"></i>
                            </div>

                            <h5 class="main-title">
                                São Paulo
                            </h5>
                            <div class="">
                                R. do Rocio, 199, 7º andar <br>
                                Vila Olímpia
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="main-title">(11) 2495-8252</h5>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
		            <?php the_content() ?>
                </div>
            </div>
        </div>
    </section>
<?php
    endwhile;
endif;
get_footer();