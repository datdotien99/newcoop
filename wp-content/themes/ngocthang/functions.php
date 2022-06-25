<?php
/**
 * ngocthang functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ngocthang
 */
/**
 * ADD theme option framework
 */
define('THEME_NAME', "KENIT");
define ('NT_HOME' , esc_url( home_url( '/' ) ));
define ('NT_URI' , get_template_directory_uri());
define ('NT_DIR' , get_template_directory());
define ('NT_INC', NT_DIR . '/inc');
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_stylesheet_directory_uri() . '/inc/admin/' );
require_once dirname( __FILE__ ) . '/inc/admin/options-framework.php';
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );
include dirname( __FILE__ ) .'/inc/ngocthang-metabox.php';
if ( ! function_exists( 'ngocthang_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function ngocthang_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on ngocthang, use a find and replace
         * to change 'ngocthang' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'ngocthang', get_template_directory() . '/languages' );
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
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'menu-primary' => esc_html__( 'Primary', 'ngocthang' ),
            'menu-top' => esc_html__( 'Top', 'ngocthang' ),
            'menu-responsive' => esc_html__( 'Responsive', 'ngocthang' ),
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
        add_theme_support( 'custom-background', apply_filters( 'ngocthang_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_image_size( 'post-img', 600, 450, true );
        
    }
endif;
add_action( 'after_setup_theme', 'ngocthang_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ngocthang_content_width() {
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters( 'ngocthang_content_width', 640 );
}
add_action( 'after_setup_theme', 'ngocthang_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ngocthang_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Home', 'ngocthang' ),
        'id'            => 'home',
        'description'   => esc_html__( 'Add widgets here.', 'ngocthang' ),
        'before_widget' => '<section id="%1$s" class="section widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header class="post__header"><h2 class="widget-title h2-title">',
        'after_title'   => '</h2></header>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'ngocthang' ),
        'id'            => 'sidebar',
        'description'   => esc_html__( 'Add widgets here.', 'ngocthang' ),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title h3-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'ngocthang' ),
        'id'            => 'footer',
        'description'   => esc_html__( 'Add widgets here.', 'ngocthang' ),
        'before_widget' => '<div class="widget col-md-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title h3-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ngocthang_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function ngocthang_scripts() {
    
    wp_enqueue_style('bootstrap-css', NT_URI . '/libs/bootstrap/css/bootstrap.min.css', array(), '' );
    wp_enqueue_script('bootstrap-js', NT_URI . '/libs/bootstrap/js/bootstrap.min.js', array(), '', true );
    wp_enqueue_style('solid', NT_URI . '/libs/font-awesome/css/solid.css', array(), '' );
    wp_enqueue_style('regular', NT_URI . '/libs/font-awesome/css/regular.css', array(), '' );
    wp_enqueue_style('brands', NT_URI . '/libs/font-awesome/css/brands.css', array(), '' );
    wp_enqueue_style('font-awesome', NT_URI . '/libs/font-awesome/css/fontawesome.css', array(), '' );

    wp_enqueue_style('animate', NT_URI . '/libs/owlcarousel/animate.css', array(), '' );
    wp_enqueue_style('owl-carousel-css', NT_URI . '/libs/owlcarousel/owl.carousel.min.css', array(), '' );
    wp_enqueue_style('owl-carousel-theme-css', NT_URI . '/libs/owlcarousel/owl.theme.default.min.css', array(), '' );
    wp_enqueue_script('owl-carousel-js', NT_URI . '/libs/owlcarousel/owl.carousel.min.js', array(), '', true );
    wp_enqueue_style('slick-css', NT_URI . '/libs/slick-slider/slick.css', array(), '' );
    


    wp_register_script('jquery', NT_URI . '/libs/owlcarousel/jquery.min.js');
    
    wp_enqueue_style( 'fancybox-css', NT_URI .'/libs/fancybox/jquery.fancybox.css',array(), '');
    wp_enqueue_script( 'fancybox-js', NT_URI . '/libs/fancybox/jquery.fancybox.js', array(), '', true);


    wp_enqueue_script( 'dcjqaccordion-js', NT_URI . '/assets/js/jquery.dcjqaccordion.2.7.min.js', array(), '', true);
    wp_enqueue_script( 'ngocthang-skip-link-focus-fix', NT_URI .'/assets/js/skip-link-focus-fix.js', array(), '', true);
    wp_enqueue_script( 'counterup-js',NT_URI .'/assets/js/jquery.counterup.min.js', '', true);
    
    wp_enqueue_script( 'wow-js',NT_URI .'/assets/js/wow.min.js', '', true);
    wp_enqueue_script( 'cookie-js', NT_URI . '/assets/js/jquery.cookie.js', array(), '', true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script('slick-js', NT_URI . '/libs/slick-slider/slick.min.js', array(), '', true );
    wp_enqueue_script( 'custom', NT_URI . '/assets/js/custom.js', array(), '', true);
    wp_enqueue_style( 'ngocthang-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'ngocthang_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom walker class.
 */
class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); 
        $display_depth = ( $depth + 1); 
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }
    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); 
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

/**
 * REGISTER POST TYPE
 */
function slides() {

  $labels = array(
    'name' => _x('Banner','kenit'),
    'singular_name' => _x('Banner','kenit'),
    'add_new' => __ ('Thêm ảnh'),
    'add_new_item' => __('Thêm ảnh mới'),
    'edit_item' => __('Sửa ảnh'),
    'new_item' => __('Thêm ảnh mới'),
    'all_items' => __('Tất cả ảnh'),
    'view_item' => __('Xem ảnh'),
    'search_item' => __('Tìm ảnh'),
    'not_found' => __('Hiện tại chưa có ảnh nào'),
    'not_found_in_trash' => __('Không có ảnh nào trong sọt rác'),
    'menu_name' => 'Banner'
    );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'rewrite' => true,
    'supports' => array('title', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-images-alt2',        
    );

  register_post_type( 'slides',$args);
  register_taxonomy( 'slides_category', 'slides', array( 'hierarchical' => true, 'label' => __('Hệ thống Banner'), 'rewrite' => array( 'slug' => __('slides') ) ) );
  flush_rewrite_rules();
}
add_action( 'init', 'slides' );

/**
*
* LIMIT WORDS
*/
function ngocthang_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit) {
    array_pop($words);
    echo implode(' ', $words)."..."; } else {
      echo implode(' ', $words); }
    }


/**
 * Classic Editor.
 */
add_filter('use_block_editor_for_post', '__return_false');