<?php if(get_field('ativar_menu_suspenso', 'option')): ?>
<a href="" class="btn-suspenso">
	<i class="icon icon-headset-solid"></i> Fale com consultor!
</a>

<div class="btn-suspenso btn-suspenso__box">
    <h3 class="main-title"> Fale com um consultor </h3>
	<?= do_shortcode( get_field('formulario_suspenso', 'option') ) ?>
</div>
<?php endif;