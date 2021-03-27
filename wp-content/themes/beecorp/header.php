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
	        ]);
	        ?>
        </div>
    </div>
</header>
