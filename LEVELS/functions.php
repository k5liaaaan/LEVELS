<?php 

function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}

if ( ! function_exists( 'lab_setup' ) ) :

function lab_setup() {
  
  register_nav_menus( array(
    'global' => 'グローバルナビ',
    'header' => 'ヘッダーナビ',
    'footer' => 'フッターナビ',
  ) );
  
}
endif;
add_action( 'after_setup_theme', 'lab_setup' );

function my_scripts_method() {

 wp_enqueue_script(
 'page_load',
 get_stylesheet_directory_uri().'/www/js/page_load.js',
 array( 'jquery' ),
 '1.8.1', true
 );

 wp_enqueue_script(
 'acordion',
 get_stylesheet_directory_uri().'/www/js/acordion.js',
 array( 'page_load' )
 );

 wp_enqueue_script(
 'mousewheel',
 get_stylesheet_directory_uri().'/www/js/jquery.mousewheel.js',
 array( 'acordion' )
 );

 wp_enqueue_script(
 'jscrollpane.min',
 get_stylesheet_directory_uri().'/www/js/jquery.jscrollpane.min.js',
 array( 'mousewheel' )
 );

 wp_enqueue_script(
 'droppy',
 get_stylesheet_directory_uri().'/www/js/jquery.droppy.js',
 array( 'jscrollpane.min' )
 );

 wp_enqueue_script(
 'bootstrap.min',
 get_stylesheet_directory_uri().'/www/bootstrap/js/bootstrap.min.js',
 array( 'droppy' )
 );

 wp_enqueue_script(
 'sliderPro.min',
 get_stylesheet_directory_uri().'/www/js/jquery.sliderPro.min.js',
 array( 'bootstrap.min' )
 );
}

wp_enqueue_script(
 'common02',
 get_stylesheet_directory_uri().'/www/js/common.js',
 array( 'sliderPro.min' )
 );
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/* アイキャッチ */
add_theme_support('post-thumbnails');




?>