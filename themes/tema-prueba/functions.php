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
    _e( 'Todos los derechos reservados.' );
  }
  add_filter('excerpt_length','custom_excerpt_length');
  function custom_excerpt_length( $num_words ){
    return 30; // number of words to show
}
//Modificar los campos Autor, Email y Sitio web del formulario de comentarios
function apk_modify_comment_fields( $fields ) {

	//Variables necesarias para que esto funcione
        $commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(

	  'author' =>
	    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' placeholder="' . __('Nombre', 'apk') . '" />', //Editamos el campo autor

	  'email' =>
	    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' placeholder="' . __('Email', 'apk') . '" />', //Editamos el campo email

	  // 'url' =>
	  //   '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
	  //   '" size="30" placeholder="' . __('Tu sitio web', 'apk') . '"  />', //Editamos el campo sitio web
	);

	return $fields;

}

add_filter('comment_form_default_fields', 'apk_modify_comment_fields');

// Polylang Shortcode - https://wordpress.org/plugins/polylang/
// Add this code in your functions.php
// Put shortcode [polylang] to post/page for display flags

function polylang_shortcode() {
	ob_start();
	pll_the_languages(array('show_flags'=>0,'show_names'=>1));
	$flags = ob_get_clean();
	return $flags;
}
add_shortcode( 'polylang', 'polylang_shortcode' );
?>
