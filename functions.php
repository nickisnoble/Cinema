<?php

// Show all errors, without having to go back to wp-config.php => COMMENT THIS OUT FOR PRODUCTION!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
error_reporting(E_ALL);
ini_set('display_errors', '1');


if ( ! function_exists( 'cinema_setup' ) ) :
function cinema_setup(){

  // ===============================================================
  // ADD THEME SUPPORTS
  // ===============================================================

  // Add html5 tag support
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

  // Add featured image support
  add_theme_support('post-thumbnails');

  // Add post format support
  add_theme_support( 'post-formats', 
    array( 
      'aside', 
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ) 
  );

  add_post_type_support( 'post', 'post-formats' );
  add_post_type_support( 'page', 'post-formats' );
  // and other custom post types if you have them


  // ===============================================================
  // REGISTER ALL THE THINGS
  // ===============================================================

  // Register dynamic menus
  register_nav_menus( array(
    'primary' => 'Primary Navigation' 
  ));

  // Add a widget area for the footer
  register_sidebar(array(
    'name'          => 'Footer Widgets', 
    'id'            => '',  
    'description'   => 'A widgetable area displayed in the footer',
    'class'         => 'footer-widgets',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

  // ===============================================================
  // ENQUEUE STYLES AND SCRIPTS
  // ===============================================================

  function cinema_enqueues() {
    wp_enqueue_style( 'main-stylesheet', get_stylesheet_uri() );
    wp_enqueue_script( 'fitvids', get_stylesheet_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), "1.1", true); // Adds built in jQuery too!
    wp_enqueue_script( 'main-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), "0.1", true);
  }
  add_action( 'wp_enqueue_scripts', 'cinema_enqueues' );

  // ===============================================================
  // EXTRA BITS AND BOBS
  // ===============================================================

  // Make custom post types searchable
  function cinema_searchable_post_types( $query ) {
    if ( $query->is_search ) { $query->set( 'post_type', array( 'site', 'plugin', 'theme', 'person' )); } 
    return $query;
  }
  add_filter( 'the_search_query', 'cinema_searchable_post_types' );


  //Alternates odd/even classes on post_class
  function cinema_alternate_post_class($classes){
    global $current_class;
    $classes[] = $current_class;
    $current_class = ($current_class == 'even') ? 'odd' : 'even';
    return $classes;
  }
  add_filter( 'post_class', 'cinema_alternate_post_class' );

}
endif; // cinema_setup
add_action( 'after_setup_theme', 'cinema_setup' );

?>