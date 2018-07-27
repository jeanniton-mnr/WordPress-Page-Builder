<?php
/*
Plugin Name: Granted Toolkit
Plugin URI: http://www.champtheme.com/demos/wp/granted
Author: ChampTheme
Author URI:http://www.champtheme.com/
Version: 1.0
Description: This plugin required for granted WP theme
textdomain: granted-toolkit
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Translate direction
load_plugin_textdomain( 'granted-toolkit', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

// Defines
define( 'granted_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__ ) ) . '/' );
define( 'granted_ACC_PATH', plugin_dir_path( __FILE__ ) );

// Light toolkit files
function granted_toolkit_files(){
    
    wp_enqueue_style('owl-carousel', plugin_dir_url( __FILE__ ) .'assets/css/owl.carousel.css');
    wp_enqueue_style('jquery-marnific', plugin_dir_url( __FILE__ ) .'assets/css/magnific-popup.css');
    wp_enqueue_style('granted-toolkit-main', plugin_dir_url( __FILE__ ) .'assets/css/granted-toolkit.css');
    
    wp_enqueue_script( 'owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/js/owl.carousel.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'jquery-magnific', plugin_dir_url( __FILE__ ) . 'assets/js/jquery.magnific-popup.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'jquery-isotope', plugin_dir_url( __FILE__ ) . 'assets/js/isotope-2.1.min.js', array('jquery'), '20120206', true );
    wp_enqueue_script( 'granted-toolkit-main', plugin_dir_url( __FILE__ ) . 'assets/js/granted-toolkit.js', array('jquery'), '20120206', true );
    
}
add_action('wp_enqueue_scripts', 'granted_toolkit_files'); 


// Dynamic service category list on VC addons
function granted_toolkit_testimonial_cat_list( ) {


    $testimonial_categories = get_terms( 'testimonial_cat' );

    $testimonial_category_options = array(esc_html__('All category', 'granted-toolkit')=>'');
    if ( $testimonial_categories ) {
        foreach ( $testimonial_categories as $testimonial_category ) {
            $testimonial_category_options[ $testimonial_category->name ] = $testimonial_category->term_id;
        }
    }

    return $testimonial_category_options;
}

// Dynamic post category list on VC addons


function granted_toolkit_get_post_taxonomies_as_list( ) {


    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );

    $category_options = array(esc_html__('All Categories', 'pro-toolkit')=>'');
    if ( $categories ) {
        foreach ( $categories as $category ) {
            $category_options[ $category->name ] = $category->ID;
        }
    }

    return $category_options;
}

function granted_toolkit_get_slides_as_list( ) {

    $args = wp_parse_args( array(
        'post_type'   => 'slide',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array(esc_html__('-- Select slide --', 'granted-toolkit')=>'');
    if ( $posts ) {
        foreach ( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }

    return $post_options;
}

function granted_toolkit_get_post_as_list( ) {

    $args = wp_parse_args( array(
        'post_type'   => 'post',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array(esc_html__('-- Select post --', 'granted-toolkit')=>'');
    if ( $posts ) {
        foreach ( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }

    return $post_options;
}


function granted_toolkit_get_page_as_list( ) {

    $args = wp_parse_args( array(
        'post_type'   => 'page',
        'numberposts' => -1,
    ) );

    $posts = get_posts( $args );

    $post_options = array(esc_html__('-- Select page --', 'granted-toolkit')=>'');
    if ( $posts ) {
        foreach ( $posts as $post ) {
            $post_options[ $post->post_title ] = $post->ID;
        }
    }

    return $post_options;
}

// Register granted Theme All Custom posts
add_action( 'init', 'granted_toolkit_custom_post' );
function granted_toolkit_custom_post() {
	register_post_type( 'slide',
		array(
			'labels' => array(
				'name' => __( 'Slides' ),
				'singular_name' => __( 'Slide' ),
				'add_new_item' => __( 'Add New Slide' )
			),
			'public' => false,
			'show_ui' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
	register_post_type( 'testimonial',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' ),
				'add_new_item' => __( 'Add New Testimonial' )
			),
			'public' => false,
			'show_ui' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
	register_post_type( 'project',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' ),
				'add_new_item' => __( 'Add New Project' )
			),
			'public' => true,
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
		)
	);
    
	register_taxonomy(
		'project_cat',  
		'project', 
		array(
			'hierarchical'          => true,
			'label'                 => 'Projects Category', 
			'query_var'             => true,
			'show_admin_column'     => true,
			'rewrite'               => array(
				'slug'              => 'project-category', 
				'with_front'        => true 
				)
			)
	);
    
	register_taxonomy(
		'testimonial_cat',  
		'testimonial', 
		array(
			'hierarchical'          => true,
			'label'                 => 'Testimonial Category', 
			'query_var'             => true,
			'show_admin_column'     => true,
			'rewrite'               => array(
				'slug'              => 'testimonial-category', 
				'with_front'        => true 
				)
			)
	);    
}


// Shortcode on widgets
add_filter('widget_text', 'do_shortcode');

// Loading Visual Composer blocks
require_once( granted_ACC_PATH . 'vc-blocks/vc-blocks-load.php' );

// Theme shortcodes

require_once( granted_ACC_PATH . 'theme-shortcodes/section-title-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/video-popup-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/cta-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/logo-carousel-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/posts-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/projects-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/service-box-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/slides-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/testimonials-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/iconic-btn-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/iconic-info-shortcode.php' );
require_once( granted_ACC_PATH . 'theme-shortcodes/extra-shortcodes.php' );

// Shortcodes depended on Visual Composer
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if (is_plugin_active('js_composer/js_composer.php')){
    require_once( granted_ACC_PATH . 'theme-shortcodes/team-shortcode.php' );
}