<?php
$termTitle = get_queried_object()->user_login;
get_header();
?>
    <section class="main-banner main-banner__interno" >
        <header class="container main-banner__interno--container">
            <h1 class="main-title"> Author(a): <?= $termTitle ?> </h1>
            <div class="main-banner__breadcrumb">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb( '<p id="breadcrumbs" class="main-banner__breadcrumb--item">','</p>' );
				}
				?>
            </div>
        </header>
    </section>

    <?= get_template_part('parts/forms/form-search-global') ?>

    <section class="main-section">
        <div class="container">
            <div class="mb-5 author-header">
                <div class="mb-3 author-header__img">
	                <?php
	                if($avatar = get_avatar(get_the_author_meta('ID')) !== FALSE):
                        ?>
                        <img src="<?= get_avatar_url(get_the_author_meta('ID'), 'full'); ?>" alt="">
                        <?php
	                endif;
	                ?>
                </div>
	            <div class=""><h5><?= $termTitle ?></h5></div>
	            <?php the_author_meta('description') ?>
                <div class="social-icons">
		            <?php if(!empty(get_user_meta(get_the_author_meta('ID'),'facebook')[0])) { ?>
                        <a href="<?= get_user_meta( get_the_author_meta('ID'),'facebook')[0]; ?>" target="_blank" id="facebook" class="social-icons__item">
                            <i class="icon icon-facebook-square-brands"></i>
                        </a>
		            <?php } ?>
		            <?php if(!empty(get_user_meta(get_the_author_meta('ID'),'linkedin')[0])) { ?>
                        <a href="<?= get_user_meta( get_the_author_meta('ID'),'linkedin')[0]; ?>" target="_blank" id="linkedin" class="social-icons__item">
                            <i class="icon icon-linkedin-brands"></i>
                        </a>
		            <?php } ?>
		            <?php if(!empty(get_user_meta(get_the_author_meta('ID'),'instagram')[0])) { ?>
                        <a href="<?= get_user_meta( get_the_author_meta('ID'),'instagram')[0]; ?>" target="_blank" id="instagram" class="social-icons__item">
                            <i class="icon icon-instagram-square-brands"></i>
                        </a>
		            <?php } ?>
		            <?php if(!empty(get_user_meta(get_the_author_meta('ID'),'twitter')[0])) { ?>
                        <a href="https://twitter.com/<?= get_user_meta( get_the_author_meta('ID'),'twitter')[0]; ?>" target="_blank" id="twitter" class="social-icons__item">
                            <i class="icon icon-twitter-square-brands"></i>
                        </a>
		            <?php } ?>
                </div>
            </div>

            <div class="">
                <?php get_template_part('parts/category-nav/category-blog') ?>
            </div>
            <div class="">
                <?php get_template_part('parts/loop/loop-blog', 'loop-blog', array('pgauthor' => true)) ?>
            </div>
            <?php get_template_part('parts/cta/cta-end-section', 'cta-end-section', array('section' => 'blog')) ?>
        </div>
    </section>

<?php get_footer() ?>