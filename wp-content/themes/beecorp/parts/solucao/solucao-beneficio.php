<?php if(get_field('titulo_sessao_beneficio')): ?>
<section class="main-section main-section__interno main-section main-section__background-efects main-section__background-efects--blue main-section__background-efects--right">
	<div class="container">
		<header class="text-center">
			<h6 class="main-title main-title__section main-title__section--blue"><?= get_field('titulo_sessao_beneficio') ?></h6>
			<div class="main-title main-title__sub-title">
				<?= get_field('sub_titulo_beneficio') ?>
			</div>
		</header>
        <div class="">
	        <?= get_field('descricao_beneficios') ?>
        </div>
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
        <?php if(get_field('tittulo_cta_beneficios')): ?>
        <div class="text-center main-section__cta mt-5">
			<?php
            echo '<div>'.get_field('tittulo_cta_beneficios').' </div>';
			if(get_field('link_cta_beneficios_copiar')):
				echo '<div class="main-section__cta--link">';
				echo '<a href="'. get_field('link_cta_beneficios_copiar') .'" class="main-link main-link__ctas">';
				echo get_field('descricao_cta_beneficios');
				echo "<i class='icon icon-arrow-double'></i>";
				echo '</a>';
				echo "</div>";
			endif;
			?>
        </div>
        <?php else: ?>
            <div class="text-center main-section__cta mt-5">
            <?php
                echo '<div> Comece agora a transformação da sua empresa. </div>';
                echo '<div class="main-section__cta--link">';
                echo '<a href="'.esc_url(home_url('contato')).'" class="main-link main-link__ctas">';
                echo  "Fale com nossos especialistas ";
                echo "<i class='icon icon-arrow-double'></i>";
                echo '</a>';
                echo "</div>";
            ?>
            </div>
        <?php endif; ?>
	</div>
</section>
<?php endif;