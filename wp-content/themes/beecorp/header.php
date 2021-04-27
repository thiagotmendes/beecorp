<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add font to site -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,4000,5000,6000,7001,4001,700&display=swap" rel="stylesheet">
    <!-- /Add font -->
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
</head>
<body>
<header class="main-header main-nav">
    <div class="container main-header__container">
        <div class="main-header__logo">
            <a href="<?= esc_url(home_url('/')) ?>">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="<?= bloginfo('name') ?>" class="">
            </a>
        </div>
        <div class="">
	        <?php
	        wp_nav_menu([
		        'menu'            => 'menu_principal',
//		        'theme_location'  => 'menu_principal',
		        'container'       => 'nav',
		        'container_id'    => 'bs4navbar',
		        'container_class' => 'main-menu',
		        'menu_id'         => false,
		        'menu_class'      => 'main-menu__nav',
		        'depth'           => 2,
		        'fallback_cb'     => 'bs4navwalker::fallback',
		        'walker'          => new bs4navwalker()
	        ])
	        ?>
        </div>
        <!-- Botão menu-responsivo -->
        <div class="btn-menu-responsive">
            <div class="main-responsive__btn-box">
                <a href="" class="main-responsive__btn-menu">
                    <span class="main-responsive__btn-menu--bar"></span>
                </a>
            </div>
        </div>

        <div class="dropdown search-header">
            <a href="" class="global-search" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon icon-search"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-search" aria-labelledby="dropdownMenuButton">
                <?php get_template_part('parts/forms/form-search-header') ?>
            </div>
        </div>
    </div>
</header>
<?php get_template_part('parts/header/menu-responsivo') ?>