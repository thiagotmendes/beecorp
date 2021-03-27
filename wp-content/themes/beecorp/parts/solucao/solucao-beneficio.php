<section class="main-section main-section">
	<div class="container">
		<header class="text-center">
			<h6 class="main-title main-title__section main-title__section--blue">BENEFÍCIOS</h6>
			<div class="main-title main-title__sub-title">
				Por que investir na Reflexologia?
			</div>
		</header>
        <div class="row justify-content-center  align-items-center mt-lg-5">
        <?php
        $beneficiosInfo = get_field('informacoes_sobre_os_beneficio');
        if(get_field('configuracao_de_posicao') == 'left'){
            ?>
            <div class="col-md-6">
                <div class="main-section__img-especial main-section__img-especial--left">
                    <img src="<?= get_field('imagem_beneficio') ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
	            <?php
	            if($beneficiosInfo['titpo_de_texto_beneficio'] == 'texto'):
		            ?>
                    <h4 class="main-title main-title__topic wow animated fadeInDown" data-wow-duration="2s"><?= $beneficiosInfo['titulo_beneficio'] ?></h4>
                    <div class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".7s"> <?= $beneficiosInfo['texto_corrido_beneficio'] ?> </div>
	            <?php
	            else:
		            $topicosBeneficios = $beneficiosInfo['topicos_beneficio'];
		            foreach($topicosBeneficios as $post){
			            echo '<h4 class="main-title main-title__topic wow animated fadeInDown" data-wow-duration="2s">' . $post['titulo_topico'] . '</h4>';
			            echo '<div class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".7s">'. $post['descricao_do_topico'] .'</div>';
		            }
		            wp_reset_postdata($post);
	            endif;
	            ?>
            </div>
            <?php
        } else {
            ?>
            <div class="col-md-6">
	            <?php
	            if($beneficiosInfo['titpo_de_texto_beneficio'] == 'texto'):
		            ?>
                    <h4 class="main-title main-title__topic wow animated fadeInDown" data-wow-duration="2s"><?= $beneficiosInfo['titulo_beneficio'] ?></h4>
                    <div class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".7s"> <?= $beneficiosInfo['texto_corrido_beneficio'] ?> </div>
	            <?php
	            else:
		            $topicosBeneficios = $beneficiosInfo['topicos_beneficio'];
		            foreach($topicosBeneficios as $post){
			            echo '<h4 class="main-title main-title__topic wow animated fadeInDown" data-wow-duration="2s">' . $post['titulo_topico'] . '</h4>';
			            echo '<div class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".7s">'. $post['descricao_do_topico'] .'</div>';
		            }
		            wp_reset_postdata($post);
	            endif;
	            ?>
            </div>
            <div class="col-md-6">
                <div class="main-section__img-especial main-section__img-especial--right">
                    <img src="<?= get_field('imagem_beneficio') ?>" alt="" class="img-fluid">
                </div>
            </div>
            <?php
        }
        ?>
		</div>
	</div>
</section>