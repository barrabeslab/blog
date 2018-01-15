<?php
function apk_load_styles() {
    wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', 'all');
    wp_enqueue_style('theme_style'); 
  }
add_action('wp_enqueue_scripts', 'apk_load_styles');
function apk_register_sidebars() {
  register_sidebar(array(
    'name' => __('Sidebar principal', 'apk'),
    'id' => 'main_sidebar',
    'description' =>  __('Este es el sidebar principal', 'apk'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'apk_register_sidebars');
add_theme_support('post-thumbnails');
if (function_exists('add_theme_support')){
  add_theme_support('menus');
  }
register_nav_menus(
  array(
  'mi_menu_primary' => 'Menú principal',
  'mi_menu_footer' => 'Menú footer',
  ));
 
add_theme_support('post-formats',array('aside','gallery ','link','image','quote','status'
  ,'video','chat','audio'));
the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive responsive--full', 'title' => 'Feature image']);
  
  function create_copyright() {
    $all_posts = get_posts( 'post_status=publish&order=ASC' );
    $first_post = $all_posts[0];
    $first_date = $first_post->post_date_gmt;
    _e( '&copy; ' );
    echo date( 'Y' );
    echo ' <strong>' . get_bloginfo('name') . '.</strong> ';
    _e( 'All rights reserved.' );
  }
  

?>