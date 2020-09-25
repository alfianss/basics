<?php
/**
 * Basics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Basics
 * @since Basics 1.0
 */

 /**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function basics_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'sidebar-1',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'sidebar-2',
            'name'          => __( 'Secondary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'basics_register_sidebars' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function register_basics_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
}
add_action( 'init', 'register_basics_menus' );

/**
 * Register and Enqueue Styles.
 */
function basics_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'basics-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'basics_enqueue_styles');

function basics_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ) );
}
add_action('wp_enqueue_scripts', 'basics_enqueue_scripts');

function sample(){
    $fruits = ['apple', 'banana'];
    echo "HEllo";
    return apply_filters('fruit_list', $fruits);
}

function example_callback( $example ) {
    // Maybe modify $example in some way.
    echo "HAI";
    return $example;
}

// add_filter('kata_kata', function($char){ return '123456i'; });
// add_filter('kata_kata', function($char){ return 'abc'; });
// add_filter('kata_kata', function($char){ return 'main'; });
// add_filter('kata_kata', function($arr) { $rsl = ''; foreach($arr as $a){ $rsl .= $a;  }; return $rsl; });

// function do_sample(){
    // add_filter('filter_sample', 'sample');
    // echo "abcdefg" . apply_filters('kata_kata', ["h", "i"]) . "jklmn";
// }
// add_action('init', 'do_sample');