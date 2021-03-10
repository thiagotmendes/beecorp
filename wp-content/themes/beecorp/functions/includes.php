<?php
function jQuery3(){
  $date = date("dmy");
  if (!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri()."/assets/js/jquery.min.js", false, $date);
    wp_enqueue_script('jquery');
  }
}
add_action('init', 'jQuery3');

function custom_theme_scripts() {
  $date = date("dmy");
  /* CSS */
  
  wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), $date, 'screen');

  /* JS */
  wp_enqueue_script( 'jquery' );
//  wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), $date, true );
//  wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), $date, true );
  // wp_enqueue_script( 'Mansory', get_template_directory_uri() . '/assets/js/masonry.pkgd.js', array('jquery'), $date, true );
  // wp_enqueue_script( 'JqueryUI',get_template_directory_uri().'/assets/js/jquery-ui.min.js', array('jquery'), $date, true );
  wp_enqueue_script( 'funcoes', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), $date, true );
  wp_localize_script( 'funcoes', 'disparaForm', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action('wp_enqueue_scripts', 'custom_theme_scripts');

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);
function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}