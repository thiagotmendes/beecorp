<?php
$casesSucesso = get_field('cases_de_sucesso', 'option');

foreach ($casesSucesso as $post): setup_postdata($post);
    get_template_part('parts/box/box-blog', 'box-blog', array('session' => 'cases'));
endforeach;
wp_reset_postdata();