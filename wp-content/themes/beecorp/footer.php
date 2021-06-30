<footer class="main-section main-footer">
    <div class="container main-footer__container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-footer__contact">
                    <?php
                    if(have_rows('cidade_footer', 'option')):
                        while(have_rows('cidade_footer', 'option')): the_row();
                            ?>
                            <h6 class="main-title main-title__section--blue"><?php the_sub_field('cidade_footer', 'option')  ?></h6>
                            <p><?php the_sub_field('telefone_footer', 'option')  ?></p>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="col-md-9">
                <nav class="main-menu__footer">
                    <?php
                    if(have_rows('menu_footer', 'option')):
                        while(have_rows('menu_footer', 'option')): the_row();
                            $tipoCategoria = get_sub_field('tipo_de_link');

                            if($tipoCategoria == 'term'){
	                            $termCategoria = get_sub_field('selecionar_a_categoria');

	                            ?>
                                <ul class="main-menu__footer__item">
                                    <li><a href="" class="main-menu__footer__item--title main-link"><?= get_sub_field('titulo_menu_footer', 'option')  ?></a></li>
                                    <?php
                                    foreach ($termCategoria as $term){
                                        ?>
                                        <li><a href="<?= get_term_link($term) ?>" class="main-link"><?= $term->name  ?></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <?php
                            } else {
                                ?>
                                <ul class="main-menu__footer__item">
                                    <li><a href="" class="main-menu__footer__item--title main-link"><?= get_sub_field('titulo_menu_footer', 'option')  ?></a></li>
		                            <?php
		                            $itemMenu = get_sub_field('itens_menu');
		                            foreach ($itemMenu as $menu):
			                            ?>
                                        <li><a href="<?= get_the_permalink($menu->ID) ?>" class="main-link"><?= $menu->post_title?></a></li>
		                            <?php
		                            endforeach;
		                            ?>
                                </ul>
                                <?php
                            }
                        endwhile;
                    endif;
                    ?>
                </nav>
            </div>
        </div>
        <div class="row mt-5 align-items-center justify-content-center align-items-center main-footer__rodape">
            <div class="col-md-4">
                © 2021 BEECORP - BEM ESTAR CORPORATIVO. <br>
                TODOS OS DIREITOS RESERVADOS.
            </div>
            <div class="col-md-4 text-center">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo-rodape.png" alt="">
            </div>
            <div class="col-md-4 text-right">
                <div class="main-footer__rodape--social">
                    <a href="" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/vk.png" alt="">
                    </a>
                    <a href="" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Pinterest.png" alt="">
                    </a>
                    <a href="" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Instagram.png" alt="">
                    </a>
                    <a href="" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Twitter.png" alt="">
                    </a>
                    <a href="" class="">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Facebook.png" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div>
</footer>

<?php get_template_part('parts/modal/modal-btn-suspenso') ?>
<?php wp_footer(); ?>
</body>
</html>