<?php
/**
 * mottoform functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mottoform
 */

if ( ! function_exists( 'mottoform_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mottoform_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on mottoform, use a find and replace
	 * to change 'mottoform' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mottoform', get_template_directory() . '/languages' );

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

		set_post_thumbnail_size( 265, 265, true );
		add_image_size( '4-col-horizontal', 1156, 9999 );
		add_image_size( '3-col-square', 859, 9999 );
		add_image_size( '3-col-horizontal', 859, 572, true );
		add_image_size( '2-col-vertical', 562, 9999 );
		add_image_size( '2-col-square', 562, 572, true );
		add_image_size( '1-col', 265, 340, true );


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'mottoform' ),
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
	add_theme_support( 'custom-background', apply_filters( 'mottoform_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'mottoform_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mottoform_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mottoform_content_width', 640 );
}
add_action( 'after_setup_theme', 'mottoform_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mottoform_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mottoform' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mottoform' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mottoform_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mottoform_scripts() {
	wp_enqueue_style( 'mottoform-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mottoform-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mottoform-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mottoform_scripts' );

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
 * Register custom post types
 */

function revcon_change_post_label() {
   global $menu;
   global $submenu;
   $menu[5][0] = 'Products';
   $submenu['edit.php'][5][0] = 'Products';
   $submenu['edit.php'][10][0] = 'Add Products';
   $submenu['edit.php'][16][0] = 'Tags';
}
function revcon_change_post_object() {
   global $wp_post_types;
   $labels = &$wp_post_types['post']->labels;
   $labels->name = 'Products';
   $labels->singular_name = 'Product';
   $labels->add_new = 'Add Product';
   $labels->add_new_item = 'Product Title';
   $labels->edit_item = 'Edit Product';
   $labels->new_item = 'Product';
   $labels->view_item = 'View Products';
   $labels->search_items = 'Search Products';
   $labels->not_found = 'No Products found';
   $labels->not_found_in_trash = 'No Products found in Trash';
   $labels->all_items = 'All Products';
   $labels->menu_name = 'Products';
   $labels->name_admin_bar = 'Products';
	 $wp_post_types['post']->rewrite = array( 'slug' => 'product' );
}

add_action( 'admin_menu', 'revcon_change_post_label' );
add_action( 'init', 'revcon_change_post_object' );

function create_post_type() {
	register_post_type( 'Surface',
    array(
      'labels' => array(
				'name'               => 'Surfaces',
		    'singular_name'      => 'Surface',
		    'menu_name'          => 'Surfaces',
		    'name_admin_bar'     => 'Surfaces',
		    'add_new'            => 'Add Surface',
		    'add_new_item'       => 'Surface Title',
		    'new_item'           => 'New Surface',
		    'edit_item'          => 'Edit Surface',
		    'view_item'          => 'View Surface',
		    'all_items'          => 'All Surfaces',
		    'search_items'       => 'Search Surfaces',
		    'parent_item_colon'  => 'Parent Surfaces',
		    'not_found'          => 'No Surfaces Found',
		    'not_found_in_trash' => 'No Surfaces Found in Trash',
      ),
	    'public'              => true,
	    'exclude_from_search' => false,
	    'publicly_queryable'  => true,
	    'show_ui'             => true,
	    'show_in_nav_menus'   => true,
	    'show_in_menu'        => true,
	    'show_in_admin_bar'   => true,
	    'menu_icon'           => 'dashicons-admin-customizer',
	    'capability_type'     => 'post',
			'taxonomies'  				=> array( 'category', 'post_tag' ),
	    'hierarchical'        => false,
	    'has_archive'         => true,
	    'rewrite'             => array( 'slug' => 'surface' ),
	    'query_var'           => true,
			'supports'          	=> array( 'title', 'thumbnail'),
			'menu_position' 			=> 5
    )
  );
	register_post_type( 'Press',
    array(
      'labels' => array(
				'name'               => 'Press',
				'singular_name'      => 'Press',
				'menu_name'          => 'Press',
				'name_admin_bar'     => 'Press',
				'add_new'            => 'Add Press',
				'add_new_item'       => 'Press Title',
				'new_item'           => 'New Press',
				'edit_item'          => 'Edit Press',
				'view_item'          => 'View Press',
				'all_items'          => 'All Press',
				'search_items'       => 'Search Press',
				'parent_item_colon'  => 'Parent Press',
				'not_found'          => 'No Press Found',
				'not_found_in_trash' => 'No Press Found in Trash',
      ),
			'public'              => true,
	    'exclude_from_search' => false,
	    'publicly_queryable'  => true,
	    'show_ui'             => true,
	    'show_in_nav_menus'   => true,
	    'show_in_menu'        => true,
	    'show_in_admin_bar'   => true,
	    'menu_icon'           => 'dashicons-microphone',
	    'capability_type'     => 'post',
			'taxonomies'  				=> array( 'category', 'post_tag' ),
	    'hierarchical'        => false,
	    'has_archive'         => true,
	    'rewrite'             => array( 'slug' => 'press' ),
	    'query_var'           => true,
			'supports'          	=> array( 'title', 'thumbnail'),
			'menu_position' 			=> 5
    )
  );
}

add_action( 'init', 'create_post_type' );


function remove_admin_menu_items() {
	$remove_menu_items = array(__('Posts'));
	global $menu;
	end ($menu);
	while (prev($menu)){
		$item = explode(' ',$menu[key($menu)][0]);
		if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
		unset($menu[key($menu)]);}
	}
}

add_action('admin_menu', 'remove_admin_menu_items');
