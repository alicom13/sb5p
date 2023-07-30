<?php
// HTML5
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
// Judul Tag
add_theme_support( 'title-tag' );
// Thumbnails
add_theme_support( 'post-thumbnails' );
// Logo
add_theme_support( 'sbp-logo', array(
    'height'               => 90,
    'width'                => 250,
    'flex-height'          => true,
    'flex-width'           => true,
    'header-text'          => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true,
) );
// Atur Letak Logo
function site_logo()
  {
    $sbp_logo_id = get_theme_mod( 'sbp_logo' );
    $logo = wp_get_attachment_image_src( $sbp_logo_id , 'full' );

    // Jika Logo
    if ( has_sbp_logo() ) {
      echo '<a href="'.get_home_url().'" ><img class="sbp-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
    } else {
      echo '<a href="'.get_home_url().'" ><h3>' . get_bloginfo('name') . '</h3></a>';
    }
  }
// Nge-load CSS & JS
function sbp_scripts()
  {
    //a\\
    wp_enqueue_style( 'default', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery-local', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', false );
    wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
    // wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
  }
add_action( 'wp_enqueue_scripts', 'sbp_scripts' );
// Ringkas Artikel
function sbp_excerpt( $length )
  {
    return 33;
  }
add_filter( 'excerpt_length', 'sbp_excerpt', 999 );
// Tombol read more
function sbp_excerpt_more($more) {
  global $post;
  return 'Baca detail';
}
add_filter('excerpt_more', 'sbp_excerpt_more');
