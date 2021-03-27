<?php
if( is_home() ){
	$tituloPreFooter = get_field('titulo_pre_footer', 'option');
	$descricaoPreFooter = get_field('descricao_pre_footer', 'option');
	$tipoCta = get_field('tipo_de_cta', 'option');
	$direcionamentoCta = get_field('direcionamento', 'option');
	$imagemPreFooter = get_field('imagem_pre_footer', 'option');
} else {
	$tituloPreFooter = get_field('titulo_pre_footer', get_the_ID());
	$descricaoPreFooter = get_field('descricao_pre_footer', get_the_ID());
	$tipoCta = get_field('tipo_de_cta', get_the_ID());
	$direcionamentoCta = get_field('direcionamento', get_the_ID());
	$imagemPreFooter = get_field('imagem_pre_footer', get_the_ID());

}

//
if(!empty($tituloPreFooter)):
?>
    <section class="main-section main-section__background-efects main-section__background-efects--blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="main-section__img">
                        <img src="<?= $imagemPreFooter ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 main-section__about--text">
                    <div class="">
                        <header>
                            <h6 class="main-title main-title__sub-title">
                                <?= $tituloPreFooter ?>
                            </h6>
                        </header>
                        <div class="mb-4">
                            <?= $descricaoPreFooter ?>
                        </div>
                    </div>
                    <div class="">
                        <?php if($tipoCta == "modal"): ?>
                            <a href="" data-modal="consultor" class="btn main-btn open-modal">
                                Fale com nossos especialistas
                            </a>
	                    <?php else: ?>
                            <a href="<?= $direcionamentoCta ?>"  class="btn main-btn">
                                Fale com nossos especialistas
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
get_template_part( 'parts/modal/modal-form-proposta' );