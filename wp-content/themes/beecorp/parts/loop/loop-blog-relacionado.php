<?php $blogRelacionado = get_field('escolher_conteudos');
if($blogRelacionado):
?>
    <section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white main-section__background-efects--left">
        <div class="container">
            <?php if(get_field('titulo_conteudo_relacionado')): ?>
            <header class="text-center">
                <h5 class="main-title main-title__section--white main-title__section"><?= get_field('titulo_conteudo_relacionado') ?></h5>
                <div class="main-title main-title__sub-title main-title__sub-title--white"><?= get_field('sub_titulo_conteudo_relacionado') ?></div>
            </header>
            <?php endif ?>
            <div class="row">
		        <?php
		        foreach ($blogRelacionado as $post): setup_postdata($post);
			        get_template_part('parts/box/box-blog');
                endforeach;
                wp_reset_postdata($post)
                ?>
            </div>
        </div>
    </section>
<?php
endif;