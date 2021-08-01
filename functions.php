<?php
/**
 * welearner functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package welearner
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Define Dir
 */
define( 'WELEARNER_THEME_URI', get_template_directory_uri() );
define( 'WELEARNER_CSS_PATH', WELEARNER_THEME_URI . '/lib/assets/css' );
define( 'WELEARNER_JS_PATH', WELEARNER_THEME_URI . '/lib/assets/js' );
define( 'WELEARNER_IMG_PATH', WELEARNER_THEME_URI . '/lib/assets/images' );

if ( ! function_exists( 'welearner_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function welearner_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on welearner, use a find and replace
         * to change 'welearner' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'welearner', get_template_directory() . '/languages' );

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
        register_nav_menus(
            array(
                'primary-menu' => esc_html__( 'Primary', 'welearner' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'welearner_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'welearner_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function welearner_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'welearner_content_width', 640 );
}
add_action( 'after_setup_theme', 'welearner_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function welearner_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'welearner' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'welearner' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer One', 'welearner' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Footer One', 'welearner' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Two', 'welearner' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Footer One', 'welearner' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Three', 'welearner' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Footer Three', 'welearner' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Four', 'welearner' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Footer Four', 'welearner' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Five', 'welearner' ),
            'id'            => 'footer-5',
            'description'   => esc_html__( 'Footer Five', 'welearner' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'welearner_widgets_init' );

if ( ! function_exists( 'welearner_fonts_url' ) ) :
    /**
     * Register Google fonts for Blessing.
     */
    function welearner_fonts_url() {
        $fonts_url     = '';
        $font_families = array();
        $subsets       = 'latin';

        if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'welearner' ) ) {
            $font_families[] = 'Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
        }
        if ( 'off' !== _x( 'on', 'Yantramanav', 'welearner' ) ) {
            $font_families[] = 'Yantramanav:wght@100;300;400;500;700;900';
        }

        if ( $font_families ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css' );
        }
        return esc_url_raw( $fonts_url );
    }
endif;

/**
 * Enqueue scripts and styles.
 */
function welearner_scripts() {

    // Add custom fonts, used in the taffees stylesheet.
    wp_enqueue_style( 'taffees-custom-fonts', welearner_fonts_url(), array(), '1.0' );

    //welearner stylesheet load
    wp_enqueue_style( 'bootstrap', WELEARNER_CSS_PATH . '/bootstrap.min.css', array(), '4.6.0' );
    wp_enqueue_style( 'line-awesome', WELEARNER_CSS_PATH . '/line-awesome.min.css', array(), '1.2.0');
    wp_enqueue_style( 'owl-carousel', WELEARNER_CSS_PATH . '/owl.carousel.min.css', array(), '2.3.4');
    wp_enqueue_style( 'welearner-default', WELEARNER_CSS_PATH . '/default.css', array(), '1.0');
    wp_enqueue_style( 'welearner-style', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_style( 'responsive', WELEARNER_CSS_PATH . '/responsive.css', array(), '1.0' );

    $slider_bg_color = get_theme_mod( 'welen_slider_bg_color_setings', esc_attr( '#3028AF' ) );
    $footer_bg_color = get_theme_mod( 'welen_footer_color_setings', esc_attr( '#021E40' ) );
    $theme_color     = get_theme_mod( 'welen_theme_color_setings', esc_attr( '#3028af' ) );

    $sliderstyle = '
		.hero-slider-area{
			background: ' . esc_attr( $slider_bg_color ) . ';
		}
		.welrn-footer-area{
			background: ' . esc_attr( $footer_bg_color ) . ';
		}
	';

    $sliderstyle .= '
		.welearner-search input[type="submit"], .weleaner-btn:hover, .section-heading a:hover, .primery-btn:hover, .team-img:after{
			background: ' . esc_attr( $theme_color ) . ';
		}

		.weleaner-btn, .section-heading a, a:hover, .price, .post-gr-infot .readmore{
			color: ' . esc_attr( $theme_color ) . ';
		}

		.primery-btn, .section-heading a{
			border-color: ' . esc_attr( $theme_color ) . ';
		}
	';

    wp_add_inline_style( 'welearner-style', $sliderstyle );

    //welearner scriptes load
    wp_enqueue_script( 'bootstrap', WELEARNER_JS_PATH . '/bootstrap.min.js', array( 'jquery' ), '4.6.0', true );
    wp_enqueue_script( 'featherp-icon', WELEARNER_JS_PATH . '/feather.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'owl-carousel', WELEARNER_JS_PATH . '/owl.carousel.min.js', array( 'jquery' ), '2.3.4', true );
    wp_enqueue_script( 'custom-js', WELEARNER_JS_PATH . '/custom.js', array( 'jquery' ), '1.0', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'welearner_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Plugin Activation
 */
require get_template_directory() . '/inc/recommended-plugin.php';

/**
 * Display Post Author Avatars
 *
 * @return void
 */
function welearner_post_author_avatars( $size ) {
    echo get_avatar( get_the_author_meta( 'email' ), $size );
}
