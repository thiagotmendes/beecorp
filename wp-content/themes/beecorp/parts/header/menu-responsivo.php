<div class="main-responsive__body">
<?php
    wp_nav_menu([
        'menu'            => 'menu_principal',
//		        'theme_location'  => 'menu_principal',
        'container'       => 'nav',
        'container_id'    => 'bs4navbar',
        'container_class' => 'main-responsive__body__nav',
        'menu_id'         => false,
        'menu_class'      => 'main-responsive__body__nav--item',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
    ])
    ?>
</div>