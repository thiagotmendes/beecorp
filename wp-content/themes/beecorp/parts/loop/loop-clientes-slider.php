<?php
if(have_rows('logos_clientes_home', 'option')):
    while (have_rows('logos_clientes_home', 'option')): the_row();
        $imageLogo = get_sub_field('logo_cliente');
        ?>
        <div class="swiper-slide main-section__clientes--slider--item">
            <img src="<?=  $imageLogo['url'] ?>" alt="<?= $imageLogo['alt']  ?>" class="img-fluid">
        </div>
        <?php
    endwhile;
endif;
