<?php
/**
 * Elite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elite
 */

if ( ! function_exists( 'elite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function elite_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Elite, use a find and replace
	 * to change 'elite' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'elite', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * adding support for theme custom logp
	 */
	add_theme_support('custom-logo', array() );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// sanitize text
	function sanitize_text( $text ){
		return sanitize_text_field( $text );
	}

	/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function elite_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'elite_dashboard_widget',         // Widget slug.
                 'Order Your Custom Theme Now',         // Title.
                 'elite_dashboard_widget_function' // Display function.
        );	
	// Globalize the metaboxes array, this holds all the widgets for wp-admin
 
 	global $wp_meta_boxes;
 	
 	// Get the regular dashboard widgets array 
 	// (which has our new widget already but at the end)
 
 	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
 	
 	// Backup and delete our new dashboard widget from the end of the array
 
 	$elite_widget_backup = array( 'elite_dashboard_widget' => $normal_dashboard['elite_dashboard_widget'] );
 	unset( $normal_dashboard['elite_dashboard_widget'] );
 
 	// Merge the two arrays together so our widget is at the beginning
 
 	$sorted_dashboard = array_merge( $elite_widget_backup, $normal_dashboard );
 
 	// Save the sorted array back into the original metaboxes 
 
 	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;

}
add_action( 'wp_dashboard_setup', 'elite_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function elite_dashboard_widget_function() {?>
	<div>
		<span ><span class="dashicons dashicons-phone" style="font-size:15px; vertical-align:middle; "></span> <strong>Ahmed :</strong> <a href="tel:+201007718787"></a> +201007718787 </span>
		<span style="    float: right;"><span class="dashicons dashicons-phone" style="font-size:15px; vertical-align:middle"></span> <strong>Ayman :</strong> <a href="tel:+201012118817"></a> +201012118817</span>
		
		<p style="text-align: center;"><span><span class="dashicons dashicons-email-alt" style="font-size:15px; vertical-align:middle; "></span> <a href="mailto:info@akwadweb.com" style="color:#444">Order NOW</a></span></p>

	</div>

	<?php
}



	// Sanitize textarea 
function sanitize_textarea( $text ) {
    
    return esc_textarea( $text );

}

	/**
	 * enqueue styles to the theme
	 */
	function elite_enqueue_styles(){
		/*[ FONT-AWESOME ICON ] 
        ============================================================================================================*/
		wp_enqueue_style( 'elite-fontawesome-styles', get_template_directory_uri() .'/library/font-awesome-4.3.0/css/font-awesome.min.css', array(), '1.0.0', 'all' );

		/*[ PLUGIN STYLESHEET ] 
        ============================================================================================================*/
        wp_enqueue_style( 'elite-animate-styles', get_template_directory_uri() .'/css/animate.css', array(), '1.0.0', 'all' );
         wp_enqueue_style( 'elite-owl-styles', get_template_directory_uri() .'/css/owl.carousel.css', array(), '1.0.0', 'all' );
         wp_enqueue_style( 'elite-owl-theme-style', get_template_directory_uri() .'/css/owl.theme.css', array(), '1.0.0', 'all' );
          wp_enqueue_style( 'elite-magnific-popup-style', get_template_directory_uri() .'/library/bootstrap/css/bootstrap.css', array(), '1.0.0', 'all' );

          /*[ Boot STYLESHEET ] 
        ============================================================================================================*/
        wp_enqueue_style( 'elite-bootstrap-theme-style', get_template_directory_uri() .'/library/bootstrap/css/bootstrap-theme.min.css', array(), '1.0.0', 'all' );
          wp_enqueue_style( 'elite-bootstrap-style', get_template_directory_uri() .'/css/color/yellow.css', array(), '1.0.0', 'all' );

         /*[ DEFAULT STYLESHEET ] 
        ============================================================================================================*/
         wp_enqueue_style( 'elite-main-style', get_template_directory_uri() .'/css/style.css', array(), '1.0.0', 'all' );
          wp_enqueue_style( 'elite-yellow-style', get_template_directory_uri() .'/css/magnific-popup.css', array(), '1.0.0', 'all' );
	}

	add_action('wp_enqueue_scripts', 'elite_enqueue_styles' );

	/**
	 * enqueue Scripts to the theme
	 */

	function elite_enqueue_scripts(){
	/*[ DEFAULT SCRIPT ] 
        ============================================================================================================*/
        wp_enqueue_script( 'elite-modernizer', get_template_directory_uri() . '/library/modernizr.custom.97074.js', array('jquery'), '1.0.0', true );
        // BOOTSTRAP JS
         wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/library/bootstrap/js/bootstrap.js', array('jquery'), '3.3.2', true );
       // easing js
       wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), '1.3.0', true );
       // PLUGIN JS
         wp_enqueue_script( 'plugin-js', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0', true );
       // SLIDER JS
       wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.js', array(), '1.0.0', true );
        wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/js/SmoothScroll.js', array(), '1.0.0', true );
       // PORTFOLIO JS
       wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '1.0.0', true );
        // wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/js/slider.js', array(), '1.0.0', true );
       // COMMON JS
       wp_enqueue_script( 'common-js', get_template_directory_uri() . '/js/common.js', array(), '1.0.0', true );

       // main JS
       wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/elite.js', array(), '1.0.0', true );


	}
	add_action('wp_enqueue_scripts', 'elite_enqueue_scripts' );



	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'elite' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'elite_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'elite_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elite_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elite_content_width', 640 );
}
add_action( 'after_setup_theme', 'elite_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elite_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'elite' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'elite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 1', 'elite' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'elite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 2', 'elite' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'elite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 3', 'elite' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'elite' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'elite_widgets_init' );

/*
	add menu item in admin bar
	 */
	
	function elite_custom_admin_bar_menus(){
		global $wp_admin_bar;
	$args = array(
		'id' => 'custom-cusotmize',
        'title' => '<span class="ab-icon"></span>'.__( 'Customize Elite', 'elite' ),
        'href' => admin_url() . 'customize.php',
        'meta' => array(
            
        ));

	$wp_admin_bar->add_menu( $args );

	$args1 = array(
		'id' => 'elite_akwadweb',
        'title' => '<span class="ab-icon"><img src="'. get_template_directory_uri() .'/images/akicon.png"></span>'.__( 'Contact Us', 'elite' ),
        'href' => 'http://www.akwadweb.com',
        'meta' => array(
            'target' => '_blank'
        ));

	$wp_admin_bar->add_menu( $args1 );
}
add_action('admin_bar_menu', 'elite_custom_admin_bar_menus',70);
/**
 * Enqueue scripts and styles.
 */
function elite_scripts() {
	wp_enqueue_style( 'elite-style', get_stylesheet_uri() );

	wp_enqueue_script( 'elite-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'elite-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elite_scripts' );

/*
elite admin style css
 */

function elite_admin_style(){
	wp_enqueue_style( 'elite-admin-style', get_template_directory_uri() .'/css/admin-style.css', array(), '1.0.0', 'all' );
}
add_action('admin_enqueue_scripts', 'elite_admin_style');

/*
elite admin scripts for js
 */

function elite_admin_scripts(){

	wp_enqueue_media();

	wp_register_script( 'elite-admin-script', get_template_directory_uri() . '/js/elite-admin.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script('elite-admin-script' );
}
add_action('admin_enqueue_scripts', 'elite_admin_scripts');



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Require custom post type feature.
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Require  custom Fields feature.
 */
require get_template_directory() . '/inc/custom-fields.php';

/**
 * Require  Contact form feature.
 */
require get_template_directory() . '/inc/contact.php';

/**
 * Require  Contact form feature.
 */
require get_template_directory() . '/inc/ajax.php';


/**
 * Require Walker class.
 */
require get_template_directory() . '/inc/walker.php';

/*
=================================================================================================================
 
*/
