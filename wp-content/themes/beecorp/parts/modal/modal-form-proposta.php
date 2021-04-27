<div class="main-modal" data-modalname="consultor">
    <div class="main-modal__body">
        <div class="main-modal__description">
            <div class="main-modal__close" data-modalclose="consultor">
                x
            </div>
            <h3 class="main-title"> Solicite uma proposta </h3>
	        <?php
            $formContato = get_field('formulario_de_contato', 'option');
            if( isset($formContato) || $formContato != ''):
                echo do_shortcode(get_field('formulario_de_contato', 'option'));
            else:
                echo "Seu pré footer nesta página está configurada como modal, por favor configure seu formulário no painel administrativo";
            endif;
            ?>
        </div>
    </div>
</div>