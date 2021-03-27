<?php
get_header();
if(have_posts()){
    while(have_posts()){ the_post();
        get_template_part('parts/solucao/solucao-header');
        get_template_part('parts/solucao/solucao-description');
        get_template_part('parts/solucao/solucao-escopo');
        get_template_part('parts/solucao/solucao-beneficio');
        get_template_part('parts/solucao/solucao-related');
        get_template_part('parts/solucao/solucao-blog');
        get_template_part('parts/footer/footer-pre-footer-img');
    }
}
get_footer();
