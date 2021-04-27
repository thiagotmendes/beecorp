<?php
$casesSucesso = get_field('cases_de_sucesso', 'option');

foreach ($casesSucesso as $cases): setup_postdata($cases);
    get_template_part('parts/box/box-blog');
endforeach;
wp_reset_postdata();