<?php
global $wpdb, $currentCategory, $diretorio;

require_once('functions/includes.php');
require_once('functions/cpt.php');
//require_once ('functions/nav_menu_principal.php');
require_once ('functions/add_options_page.php');
require_once ('functions/acf_fields.php');
require_once ('functions/wp_bootstrap_menuwalker.php');
// diretiorio do template
$diretorio = get_template_directory();
// remove a barra de admin do front do site
show_admin_bar(false);

// habilita upload de svg para o site
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}

/********************************************************/
/************ custom logo ******************************/
/******************************************************/
add_theme_support( 'custom-logo',
  array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
  )
);


/* Remove scripts não usados no Wordpress */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
/* Remove scripts não usados no Wordpress */

/* ----------------------------------------------------- */
/* Escondendo a versão do Wordpress */
/* ----------------------------------------------------- */
remove_action('wp_head', 'wp_generator');
/* ----------------------------------------------------- */
/* Abilitando suporte ao gerenciador de menus */
/* ----------------------------------------------------- */
register_nav_menus(
  array(
    'menu_principal' => 'Menu de navegação principal',
  )
);
/*
Modo de uso:
<?php wp_nav_menu( array('theme_location'=>'menu_topo','menu_class'=>'menu') ); ?>
*/
/* ----------------------------------------------------- */
/* Abilitando suporte a imagens destacadas */
/* ----------------------------------------------------- */
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
//add_image_size('thumb-destaque-blog', 540, 300, true);
//add_image_size('thumb-loop-blog', 350, 250, true);
//add_image_size('thumb-interno-blog', 730, 400, true);
//add_image_size('poster_cinema_home', 320, 465, true);
//add_image_size('thumb-custom-2', 66, 66, true);
/*
Modo de uso:
<?php the_post_thumbnail('thumbnail'); ?>

/* ----------------------------------------------------- */
/* Registrando uma sidebar */
/* ----------------------------------------------------- */
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'Sidebar',
        'id'  => 'sidebar',
        'before_widget' => '<div class="main-advertising main-advertising--interno">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="main-title main-title--white main-advertising__title">',
        'after_title' => '</h3>',
    )
);

/*
Modo de uso:
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Lateral') ) :?>
    <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
<?php endif; ?>
*/
/* ----------------------------------------------------- */
/* Resumo com limite de palavras customizada */
/* ----------------------------------------------------- */
function the_excerpt_limit($limit, $postId = null) {
    $excerpt = explode(' ', get_the_excerpt($postId), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
        $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
        echo $excerpt;
}
/*
Modo de uso:
<?php the_excerpt_limit(20); ?>
*/

function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
       echo '<div class="main-pagination">';
         echo "<div class='main-pagination__container'>";
           //echo "<li> <span>Page ".$paged." of ".$pages."</span> </li>";

           // if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo; First</a></li>";
           // seta esquerda
           if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class='main-pagination__arrow main-pagination__arrow--left'></a>";

           echo "<span class='main-pagination__bullets'>";
          for ($i=1; $i <= $pages; $i++)
          {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
              if ($paged == $i):
                // corrente (active)
                echo  "<a class='main-pagination__bullet main-pagination__bullet--active' disabled>".$i."</a>";
              else:
                // bullet (pagination_bullet)
                echo "<a href='".get_pagenum_link($i)."' class=\"main-pagination__bullet\">".$i."</a>";
              endif;
          }
          }
          echo "</span>";
            // seta direita
           if ($paged < $pages && $showitems < $pages) echo "<a href='.get_pagenum_link($paged + 1).' class='main-pagination__arrow main-pagination__arrow--right'></a>";
           // if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>Last &raquo;</a></li>";

         echo "</div>";
      echo "</div>";
     }
}

function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );
/**
* Filter function used to remove the tinymce emoji plugin.
*
* @param array $plugins
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}

function template_chooser($template)
{
	global $wp_query;
	$post_type = get_query_var('post_type');
	if( $wp_query->is_search && $post_type == 'solucoes' )
	{
		return locate_template('search-solution.php');  //  redirect to archive-search.php
	}
	return $template;
}
add_filter('template_include', 'template_chooser');

add_action('wp_ajax_loadMore', 'loadMore');
add_action('wp_ajax_nopriv_loadMore', 'loadMore' ); // aparentemente não é obrigatorio utilizar este action
function loadMore(){
    if (isset( $_GET['page'] ) ){
	    $ajaxPaged = $_GET['page'];
    } else {
	    $ajaxPaged = 1;
    }
	$currentPostType = $_GET['post_type'];

	// Inicia a páginação

    $argBlog = array(
        'post_type' => $_GET['post_type'],
        'posts_per_page' => 12,
        'paged' => $ajaxPaged
    );

	if(isset($_GET['post_category'])){
		$taxQuery = array(
			'tax_query' => array(
				array(
					'taxonomy' => $_GET['post_taxonomy'],
					'field'    => 'slug',
					'terms'    => $_GET['post_category'],
				)
			)
		);

		$argBlog = array_merge($argBlog, $taxQuery);
	}
    $loopBlog = new WP_Query($argBlog);
    if($loopBlog->have_posts()){
	    echo '<div class="row">';
        while($loopBlog->have_posts()){ $loopBlog->the_post();
            if($currentPostType == "solucoes"){
                include( locate_template('parts/box/box-solucoes.php') );
            } else {
                include( locate_template('parts/box/box-blog.php') );
            }
        }
	    echo '</div>';
    } else {
    	echo "<div class='text-center'> Nenhuma solução encontrada </div>";
    }

    die;
}
