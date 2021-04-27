<section class="main-section main-section__solucoes main-section__background-efects main-section__background-efects--blue main-section__background-efects--left">
	<div class="container">
		<header class="text-center">
            <?php
            if(get_field('titulo_solucoes', 'option')):
                echo '<h3 class="main-title main-title__section main-title__section--blue">'.get_field('titulo_solucoes', 'option').'</h3>';
            endif;
            if( get_field('sub_titulo_solucoes_home', 'option') ):
	            echo '<span class="main-title main-title__sub-title"> '.get_field('sub_titulo_solucoes_home', 'option').' </span>';
            endif;
            ?>
		</header>
        <?php
        if( get_field('descricao_solucao', 'option') ):
	        echo '<div class="text-center"> '.get_field('descricao_solucao', 'option').' </div>';
        endif;
        ?>
		<?php get_template_part('parts/loop/loop-solucao') ?>
		<?php get_template_part('parts/cta/cta-end-section', 'cta-end-section', array('section' => 'solucao')) ?>
	</div>
</section>