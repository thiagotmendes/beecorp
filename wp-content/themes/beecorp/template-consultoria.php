<?php
/* Template name: Consultoria */
get_header();
if(have_posts()){
	while(have_posts()){ the_post();
		get_template_part('parts/consultoria/consultoria-header');
		get_template_part('parts/consultoria/consultoria-description');
		get_template_part('parts/consultoria/consultoria-steps');
		get_template_part('parts/consultoria/consultoria-beneficios');
		get_template_part('parts/consultoria/consultoria-depoimento');
		get_template_part('parts/solucao/solucao-related');
		get_template_part('parts/solucao/solucao-blog');
		get_template_part('parts/footer/footer-pre-footer-img');
	}
}
get_footer();
