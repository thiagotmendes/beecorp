<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add font to site -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- /Add font -->
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="main-header main-nav">
    <div class="container main-header__container">
        <div class="">
            <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="<?= bloginfo('name') ?>" class="">
        </div>
        <div class="">
            <nav class="main-menu">
                <ul class="main-menu__nav">
                    <li><a href="<?= esc_url(home_url('quem-somos')) ?>" class="main-menu__nav__link main-link">Sobre nós</a></li>
                    <li><a href="" class="main-menu__nav__link main-link">Clientes</a></li>
                    <li><a href="<?= esc_url(home_url('solucoes')) ?>" class="main-menu__nav__link main-link">Soluções</a></li>
                    <li><a href="" class="main-menu__nav__link main-link">Consultoria</a></li>
                    <li><a href="" class="main-menu__nav__link main-link">Conteúdo</a></li>
                    <li><a href="<?= esc_url(home_url('contato')) ?>" class="main-menu__nav__link main-link">Fale Conosco</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
