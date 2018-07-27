<?php
/**
 * granted champtheme functions and definitions.
 */

if ( ! function_exists( 'granted_champtheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function granted_champtheme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on granted champtheme, use a find and replace
	 * to change 'granted-champtheme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'granted-champtheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'granted-champtheme-thumb', 750, 450, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'granted-champtheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
}
endif;
add_action( 'after_setup_theme', 'granted_champtheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function granted_champtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'granted_champtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'granted_champtheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function granted_champtheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'granted-champtheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'granted-champtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Project sidebar', 'granted-champtheme' ),
		'id'            => 'project-sidebar',
		'description'   => esc_html__( 'Add project sidebars here.', 'granted-champtheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Footer widgets', 'granted-champtheme' ),
		'id'            => 'footer-widgets',
		'description'   => esc_html__( 'Add footer widgets here.', 'granted-champtheme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'granted_champtheme_widgets_init' );

function granted_champtheme_footer_widgets_params($params) {

    $sidebar_id = $params[0]['id'];

    if ( $sidebar_id == 'footer-widgets' ) {

        $total_widgets = wp_get_sidebars_widgets();
        $sidebar_widgets = count($total_widgets[$sidebar_id]);

        if($sidebar_widgets == 2) {
            $footer_wid_width_markup = 'col-xs-12 col-sm-6';
        } elseif($sidebar_widgets == 3) {
            $footer_wid_width_markup = 'col-md-4 col-xs-12 col-sm-6';
        }  elseif($sidebar_widgets == 4) {
            $footer_wid_width_markup = 'col-md-3 col-xs-12 col-sm-6';
        }  elseif($sidebar_widgets == 5) {
            $footer_wid_width_markup = 'col-md-3 col-xs-12 col-sm-6';
        }  elseif($sidebar_widgets == 6) {
            $footer_wid_width_markup = 'col-md-2 col-xs-12 col-sm-6';
        } else {
            $footer_wid_width_markup = 'col-md-12';
        }

        $params[0]['before_widget'] = str_replace('class="', 'class="'.esc_attr($footer_wid_width_markup).' ', $params[0]['before_widget']);
    }

    return $params;
}
add_filter('dynamic_sidebar_params','granted_champtheme_footer_widgets_params');

/**
 * Enqueue scripts and styles.
 */

function granted_champtheme_scripts() {
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.5.1' );
    wp_enqueue_style( 'jquery-slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '1.0.10' );
    wp_enqueue_style( 'granted-champtheme-default', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0.10' );
    
    
	wp_enqueue_style( 'granted-champtheme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'granted-champtheme-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'granted_champtheme_scripts' );



/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/cs-framework/cs-framework.php';
require get_template_directory() . '/inc/metabox-and-options.php';
require get_template_directory() . '/inc/required-plugins.php';
require get_template_directory() . '/inc/theme-style.php';


// Favicon
if(function_exists('wp_site_icon') && has_site_icon()) { } else {
    $granted_favicon = cs_get_option('granted_favicon');
    if ( ! function_exists( 'granted_champtheme_favicon' ) && !empty($granted_favicon) ) {
        function granted_champtheme_favicon() {
            $granted_favicon_id = cs_get_option('granted_favicon');
            $granted_favicon_url = wp_get_attachment_image_src($granted_favicon_id, 'thumbnail');
            ?>
            <link rel="shortcut icon" type="image/png" href="<?php echo esc_url($granted_favicon_url[0]); ?>"/>
            <?php
        }
        add_action('wp_head', 'granted_champtheme_favicon');
    }   
}


/**
 * Import demo data.
 */

function granted_champtheme_import_files() {
return array(
		array(
			'import_file_name'             => esc_html__('Demo Import 1', 'granted-champtheme'),
			'local_import_file'            => trailingslashit( get_template_directory() ) . '/inc/demo-contents/granted-demo-content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . '/inc/demo-contents/granted-demo-customizer.dat',
			'import_notice'                => esc_html__( 'After import demo, just set static homepage from settings > reading, check widgets & menus. You will be done! :-)', 'granted-champtheme' ),
		)
	);
} //industry_import_files
add_filter( 'pt-ocdi/import_files', 'granted_champtheme_import_files' );