<?php $blogRelacionado = get_field('escolher_conteudos');
if($blogRelacionado):
?>
    <section class="main-section main-section__blog main-section__background-efects main-section__background-efects--white main-section__background-efects--left">
        <div class="container">
            <header class="text-center">
                <h5 class="main-title main-title__section--white main-title__section">Conteúdos relacionados</h5>
                <div class="main-title main-title__sub-title">Confira nossos materiais sobre <br> saúde mental</div>
            </header>
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