<footer class="main-section main-footer">
    <div class="container main-footer__container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-footer__contact">
                    <h6 class="main-title main-title__section--blue">Belo Horizonte</h6>
                    <p>(31) 3318-0070</p>

                    <h6 <h6 class="main-title main-title__section--blue">São Paulo</h6>
                    <p>(31) 3318-0070</p>
                </div>
            </div>
            <div class="col-md-9">
                <nav class="main-menu__footer">
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <ul class="main-menu__footer__item">
                            <li><a href="" class="main-menu__footer__item--title main-link">Empresa</a></li>
                            <li><a href="" class="main-link">Sobre a BeeCorp</a></li>
                            <li><a href="" class="main-link">Clientes</a></li>
                            <li><a href="" class="main-link">Escritórios</a></li>
                            <li><a href="" class="main-link">Fale Conosco</a></li>
                            <li><a href="" class="main-link">Trabalhe Conosco</a></li>
                        </ul>
                    <?php endfor; ?>
                </nav>
            </div>
        </div>
        <div class="row mt-5 align-items-center justify-content-center align-items-center main-footer__rodape">
            <div class="col-md-4">
                © 2021 BEECORP - BEM ESTAR CORPORATIVO. <br>
                TODOS OS DIREITOS RESERVADOS.
            </div>
            <div class="col-md-4 text-center">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo_footer.png" alt="">
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
<?php wp_footer(); ?>
</body>
</html>